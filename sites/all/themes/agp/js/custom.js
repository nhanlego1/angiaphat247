(function ($) {

    /**
     * Provide the summary information for the block settings vertical tabs.
     */
    Drupal.behaviors.CustAngiaphat = {
        attach: function (context) {




            //add select 2
            $(".frombookingFliter").select2({
                width: 'resolve' // need to override the changed default
            });
            $(".tobookingFliter").select2({
                width: 'resolve' // need to override the changed default
            });

            //   _initFormTicket();
            //form submit ajax
            if ($(".frombookingFliter").val() != '' && $(".tobookingFliter").val() != '') {
                var data_ = getFormData($("#bookingForm"));
                var data2_ = getFormData($($("#bookingForm")));
                var cleartickettimeout;
                $(".fromway-ticket").html('');
                $(".returnway-ticket").html('');

                $("#btn-search-ticket").hide();

                //check 1 way or 2 way
                if (data_.RoundTrip == 'true') {
                    //clear data first
                    clearTimeout(cleartickettimeout);
                    //if($("#booking_type_1_way").checked()){
                    $(".loading-message-depart").show();
                    data_.ReturnDate = null;
                    cleartickettimeout = setTimeout(function () {
                        $.post("/ajax/ticket/checking", {data: data_, method: 'oneway'})
                            .done(function (data) {
                                $(".submit-ticket-result").show();
                                $(".loading-message-depart").hide();
                                $(".fromway-ticket").append(data);
                                _initFormTicket();
                                $("#btn-search-ticket").show();

                                var cleartickettimeoutjs;
                                clearTimeout(cleartickettimeoutjs);
                                cleartickettimeoutjs = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/fly", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFrom();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 2);
                                var cleartickettimeoutvn;
                                clearTimeout(cleartickettimeoutvn);
                                cleartickettimeoutvn = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/vn", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFromVn();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 2);

                            })
                            .fail(function () {
                                //alert( "error" );
                            });
                    }, 10);

                    //return
                    var cleartickettimeoutTo;
                    clearTimeout(cleartickettimeoutTo);
                    cleartickettimeoutTo = setTimeout(function () {
                        var newToPlace = data2_.FromPlace;
                        var newTolaceNam = data2_.FromPlaceName;
                        var newFromdate = data2_.ReturnDate;
                        data2_.FromPlace = data2_.ToPlace;
                        data2_.FromPlaceName = data2_.ToPlaceName;
                        data2_.ToPlace = newToPlace;
                        data2_.ToPlaceName = newTolaceNam;
                        data2_.DepartDate = newFromdate;
                        $(".loading-message-return").show();
                        $.post("/ajax/ticket/checking/return", {data: data2_, method: 'twoway'})
                            .done(function (datato) {
                                $(".submit-ticket-result").show();
                                $(".loading-message-return").hide();
                                $(".returnway-ticket").append(datato);
                                _initFormTicket2();
                                $("#btn-search-ticket").show();

                                var cleartickettimeoutjs;
                                clearTimeout(cleartickettimeoutjs);
                                cleartickettimeoutjs = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/fly", {data: data2_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".returnway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiReturn();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 5);
                                var cleartickettimeoutvn;
                                clearTimeout(cleartickettimeoutvn);
                                cleartickettimeoutvn = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/vn", {data: data2_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".returnway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiReturnVn();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 5);

                            })
                            .fail(function () {
                                //alert( "error" );
                            });
                    }, 20);


                } else {
                    clearTimeout(cleartickettimeout);
                    //if($("#booking_type_1_way").checked()){
                    $(".loading-message-depart").show();
                    cleartickettimeout = setTimeout(function () {
                        $.post("/ajax/ticket/checking", {data: data_, method: 'oneway'})
                            .done(function (data) {
                                $(".submit-ticket-result").show();
                                $(".loading-message-depart").hide();
                                $(".fromway-ticket").append(data);
                                _initFormTicket();
                                $("#btn-search-ticket").show();

                                var cleartickettimeoutjs;
                                clearTimeout(cleartickettimeoutjs);
                                cleartickettimeoutjs = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/fly", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFrom();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 10);

                                var cleartickettimeoutvn;
                                clearTimeout(cleartickettimeoutvn);
                                cleartickettimeoutvn = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/vn", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFromVn();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 100);

                            })
                            .fail(function () {
                                //alert( "error" );
                            });
                    }, 10);
                }
                //return false;

            }
            //click subnit
            $(".page-ticket-checking #bookingForm").submit(function () {
                var data_ = getFormData($(this));
                var data2_ = getFormData($(this));
                var cleartickettimeout;
                $(".fromway-ticket").html('');
                $(".returnway-ticket").html('');

                $("#btn-search-ticket").hide();

                //check 1 way or 2 way
                if (data_.RoundTrip == 'true') {
                    //clear data first
                    clearTimeout(cleartickettimeout);
                    //if($("#booking_type_1_way").checked()){
                    $(".loading-message-depart").show();
                    data_.ReturnDate = null;
                    cleartickettimeout = setTimeout(function () {
                        $.post("/ajax/ticket/checking", {data: data_, method: 'oneway'})
                            .done(function (data) {
                                $(".submit-ticket-result").show();
                                $(".loading-message-depart").hide();
                                $(".fromway-ticket").append(data);
                                _initFormTicket();
                                $("#btn-search-ticket").show();
                                var cleartickettimeoutjs;
                                clearTimeout(cleartickettimeoutjs);
                                cleartickettimeoutjs = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/fly", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFrom();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 200);

                                var cleartickettimeoutvn;
                                clearTimeout(cleartickettimeoutvn);
                                cleartickettimeoutvn = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/vn", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFromVn();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 200);

                            })
                            .fail(function () {
                                //alert( "error" );
                            });
                    }, 20);

                    //return
                    var cleartickettimeoutTo;
                    clearTimeout(cleartickettimeoutTo);
                    cleartickettimeoutTo = setTimeout(function () {
                        var newToPlace = data2_.FromPlace;
                        var newTolaceNam = data2_.FromPlaceName;
                        var newFromdate = data2_.ReturnDate;
                        data2_.FromPlace = data2_.ToPlace;
                        data2_.FromPlaceName = data2_.ToPlaceName;
                        data2_.ToPlace = newToPlace;
                        data2_.ToPlaceName = newTolaceNam;
                        data2_.DepartDate = newFromdate;
                        $(".loading-message-return").show();
                        $.post("/ajax/ticket/checking/return", {data: data2_, method: 'twoway'})
                            .done(function (datato) {
                                $(".submit-ticket-result").show();
                                $(".loading-message-return").hide();
                                $(".returnway-ticket").append(datato);
                                _initFormTicket2();
                                $("#btn-search-ticket").show();

                                var cleartickettimeoutjs;
                                clearTimeout(cleartickettimeoutjs);
                                cleartickettimeoutjs = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/fly", {data: data2_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".returnway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiReturn();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 200);
                                var cleartickettimeoutvn;
                                clearTimeout(cleartickettimeoutvn);
                                cleartickettimeoutvn = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/vn", {data: data2_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".returnway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiReturnVn();
                                            }, 100);

                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 200);

                            })
                            .fail(function () {
                                //alert( "error" );
                            });
                    }, 20);


                } else {
                    clearTimeout(cleartickettimeout);
                    //if($("#booking_type_1_way").checked()){
                    $(".loading-message-depart").show();
                    cleartickettimeout = setTimeout(function () {
                        $.post("/ajax/ticket/checking", {data: data_, method: 'oneway'})
                            .done(function (data) {
                                $(".submit-ticket-result").show();
                                $(".loading-message-depart").hide();
                                $(".fromway-ticket").append(data);
                                _initFormTicket();
                                $("#btn-search-ticket").show();

                                var cleartickettimeoutjs;
                                clearTimeout(cleartickettimeoutjs);
                                cleartickettimeoutjs = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/fly", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFrom();
                                            }, 100);
                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 100);

                                var cleartickettimeoutvn;
                                clearTimeout(cleartickettimeoutvn);
                                cleartickettimeoutvn = setTimeout(function () {
                                    $.post("/ajax/ticket/checking/vn", {data: data_, method: 'oneway'})
                                        .done(function (data) {

                                            $(".fromway-ticket ul.tbl-ticket-result").append(data);
                                            var timeClear;
                                            clearTimeout(timeClear);
                                            timeClear = setTimeout(function () {
                                                _sortLiFromVn();
                                            }, 100);
                                        })
                                        .fail(function () {
                                            //alert( "error" );
                                        });
                                }, 100);

                            })
                            .fail(function () {
                                //alert( "error" );
                            });
                    }, 10);
                }

                return false;

            });

            function getFormData(dom_query) {
                var out = {};
                var s_data = $(dom_query).serializeArray();
                //transform into simple data/value object
                for (var i = 0; i < s_data.length; i++) {
                    var record = s_data[i];
                    out[record.name] = record.value;
                }
                return out;
            }


            //check validate before submit
            $("#booking_ticket").submit(function () {
                if ($(".ticket-result-first_leg-twoway").length) {
                    if ($(".oneway-ticket").val() == '') {
                        $(".message-ticket-error p").html('Vui lòng chọn vé chặn đi trước khi đặt vé.');
                        $(".message-ticket-error").show();
                        $('html, body').animate({ scrollTop: $('#ticket_message_error').offset().top }, 'slow');
                        return false;
                    }
                    if ($(".twoway-ticket").val() == '') {
                        $(".message-ticket-error p").html('Vui lòng chọn vé chặn về trước khi đặt vé.');
                        $(".message-ticket-error").show();
                        $('html, body').animate({ scrollTop: $('#ticket_message_error').offset().top }, 'slow');
                        return false;
                    }
                } else if ($(".oneway-ticket").val() == '') {
                    $(".message-ticket-error p").html('Vui lòng chọn vé chặn đi trước khi đặt vé.');
                    $(".message-ticket-error").show();
                    $('html, body').animate({ scrollTop: $('#ticket_message_error').offset().top }, 'slow');
                    return false;
                }


            });


        }
    };

    function _initFormTicket() {
        $(".depart-info .detail a").each(function () {
            $(this).on('click', function (event) {
                event.preventDefault();
                $(this).parent().next().toggle();
            });
        });

        $(".booking-ticket-oneway .ticket-selection").each(function () {
            $(this).change(function () {
                $(".submit-ticket-result .oneway-ticket").val($(this).val());
                $(".submit-ticket-result .ticket-type").val('oneway');
            });
        });

    }

    function _initFormTicketJS() {
        $(".depart-info li.jetstar-wrapper .detail a").each(function () {
            $(this).on('click', function (event) {
                event.preventDefault();
                $(this).parent().next().toggle();
            });
        });

        $(".booking-ticket-oneway .ticket-selection").each(function () {
            $(this).change(function () {
                $(".submit-ticket-result .oneway-ticket").val($(this).val());
                $(".submit-ticket-result .ticket-type").val('oneway');
            });
        });

    }

    function _initFormTicketJS2() {
        $(".return-info li.jetstar-wrapper .detail a").each(function () {
            $(this).on('click', function (event) {
                event.preventDefault();
                $(this).parent().next().toggle();
            });
        });

        $(".booking-ticket-twoway .ticket-selection").each(function () {
            $(this).change(function () {
                $(".submit-ticket-result .twoway-ticket").val($(this).val());
                $(".submit-ticket-result .ticket-type").val('twoway');
            });
        });

    }

    function _initFormTicketvn() {
        $(".depart-info li.vn-wrapper .detail a").each(function () {
            $(this).on('click', function (event) {
                event.preventDefault();
                $(this).parent().next().toggle();
            });
        });

        $(".booking-ticket-oneway .ticket-selection").each(function () {
            $(this).change(function () {
                $(".submit-ticket-result .oneway-ticket").val($(this).val());
                $(".submit-ticket-result .ticket-type").val('oneway');
            });
        });

    }

    function _initFormTicketvn2() {
        $(".return-info li.vn-wrapper .detail a").each(function () {
            $(this).on('click', function (event) {
                event.preventDefault();
                $(this).parent().next().toggle();
            });
        });

        $(".booking-ticket-twoway .ticket-selection").each(function () {
            $(this).change(function () {
                $(".submit-ticket-result .twoway-ticket").val($(this).val());
                $(".submit-ticket-result .ticket-type").val('twoway');
            });
        });

    }

    function _initFormTicket2() {
        $(".return-info .detail a").each(function () {
            $(this).on('click', function (event) {
                event.preventDefault();
                $(this).parent().next().toggle();
            });
        });

        $(".booking-ticket-twoway .ticket-selection").each(function () {
            $(this).change(function () {
                $(".submit-ticket-result .twoway-ticket").val($(this).val());
                $(".submit-ticket-result .ticket-type").val('twoway');
            });
        });

    }


    function _sortLiFrom() {
        $(".fromway-ticket ul.tbl-ticket-result li.detail-wrapper").sort(function (a, b) {
            var contentA = parseInt($(a).attr('data-sort'));
            var contentB = parseInt($(b).attr('data-sort'));
            return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
        }).appendTo($(".fromway-ticket ul.tbl-ticket-result"));
        _initFormTicketJS();
    }

    function _sortLiFromVn() {
        $(".fromway-ticket ul.tbl-ticket-result li.detail-wrapper").sort(function (a, b) {
            var contentA = parseInt($(a).attr('data-sort'));
            var contentB = parseInt($(b).attr('data-sort'));
            return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
        }).appendTo($(".fromway-ticket ul.tbl-ticket-result"));
        _initFormTicketvn();
    }

    function _sortLiReturn() {
        $(".returnway-ticket ul.tbl-ticket-result li.detail-wrapper").sort(function (a, b) {
            var contentA = parseInt($(a).attr('data-sort'));
            var contentB = parseInt($(b).attr('data-sort'));
            return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
        }).appendTo($(".returnway-ticket ul.tbl-ticket-result"));
        _initFormTicketJS2();
    }

    function _sortLiReturnVn() {
        $(".returnway-ticket ul.tbl-ticket-result li.detail-wrapper").sort(function (a, b) {
            var contentA = parseInt($(a).attr('data-sort'));
            var contentB = parseInt($(b).attr('data-sort'));
            return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
        }).appendTo($(".returnway-ticket ul.tbl-ticket-result"));
        _initFormTicketvn2();
    }

})(jQuery);
