(function ($) {

    /**
     * Provide the summary information for the block settings vertical tabs.
     */
    Drupal.behaviors.ScriptAngiaphat = {
        attach: function (context) {

            $('.latest-scroll').carouFredSel({
                auto: false,
                items               : 4,
                direction           : "left",
                minimum :1,
                items : {
                    width:270,
                    visible     : {
                        min         : 1,
                        max         : 4
                    }
                },
                responsive  : true,

                scroll : {
                    items           : 1,
                    duration        : 500,
                    pauseOnHover    : true
                },
                prev : {
                    button  : "#l_prev",
                    key     : "left"
                },
                next : {
                    button  : "#l_next",
                    key     : "right"
                },
            });
            $(".quickview-latest").fancybox({
                maxWidth	: 800,
                maxHeight	: 600,
                fitToView	: false,
                width		: '70%',
                height		: '70%',
                autoSize	: false,
                closeClick	: false,
                openEffect	: 'elastic',
                closeEffect	: 'elastic',

            });

            $('.specials-scroll').carouFredSel({
                auto: false,
                items: 4,
                direction: "left",
                minimum: 1,
                items: {
                    width: 270,
                    visible: {
                        min: 1,
                        max: 4
                    }
                },
                responsive: true,

                scroll: {
                    items: 1,
                    duration: 500,
                    pauseOnHover: true
                },
                prev: {
                    button: "#s_prev",
                    key: "left"
                },
                next: {
                    button: "#s_next",
                    key: "right"
                },
            });
            $(".quickview-special").fancybox({
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '70%',
                height: '70%',
                autoSize: false,
                closeClick: false,
                openEffect: 'elastic',
                closeEffect: 'elastic',

            });

                var IE = '\v' == 'v';
                var sect = 1;

                $("#gallery_zoom").elevateZoom({
                    gallery: 'image-additional',
                    cursor: 'pointer',
                    zoomType: 'inner',
                    galleryActiveClass: 'active',
                    imageCrossfade: true
                });
                $("#gallery_zoom").bind("click", function (e) {
                    var ez = $('#gallery_zoom').data('elevateZoom');
                    $.fancybox(ez.getGalleryList());
                    return false;
                });

               // $(document).ready(function () {
                    $('column').find('.box-category .menu  li li a').prepend('<i class="fa fa-angle-right "></i>');
                    $('#content').find('ul.list li a').prepend('<i class="fa fa-angle-right "></i>');
                    $('.site-map-page #content ').find(' ul li a').prepend('<i class="fa fa-angle-right "></i>');
                    $('.manufacturer-content ').find(' div>a').prepend('<i class="fa fa-angle-right "></i>');
                   // $('footer .footer_box ').find(' li a').prepend('<i class="fa fa-chevron-right"></i>');
                    //$('#tm_menu div > ul > li > ul  ').find(' li>a').prepend('<i class="fa fa-chevron-right"></i>');
                    //$('.box.info .box-content ul li  ').find('a').prepend('<i class="fa fa-chevron-right"></i>');
               // });
                (function ($) {
                    $.fn.equalHeights = function (minHeight, maxHeight) {
                        tallest = (minHeight) ? minHeight : 0;
                        this.each(function () {
                            if ($(this).height() > tallest) {
                                tallest = $(this).height()
                            }
                        });
                        if ((maxHeight) && tallest > maxHeight)tallest = maxHeight;
                        return this.each(function () {
                            $(this).height(tallest)
                        })
                    }
                })($)
                $(window).load(function () {
                    if ($("#content .product-grid .name").length) {
                        $("#content .product-grid .name").equalHeights()
                    }
                });
                (function ($) {
                    $.fn.equalHeights = function (minHeight, maxHeight) {
                        tallest = (minHeight) ? minHeight : 0;
                        this.each(function () {
                            if ($(this).height() > tallest) {
                                tallest = $(this).height()
                            }
                        });
                        if ((maxHeight) && tallest > maxHeight)tallest = maxHeight;
                        return this.each(function () {
                            $(this).height(tallest)
                        })
                    }
                })($)
                $(window).load(function () {
                    if ($(".maxheight-r").length) {
                        $(".maxheight-r").equalHeights()
                    }
                });
                (function ($) {
                    // $(document).ready(function () {
                    //     var exampleOptions = {
                    //         delay: 1000,
                    //         animation: {opacity: 'show', height: 'show'},
                    //         speed: 'fast',
                    //         autoArrows: true
                    //     }
                    //     var example = $('#tm_menu').superfish(exampleOptions);
                    // });
                })($);
                $("#menu-icon").on("click", function () {
                    $("#menu-gadget .menu").slideToggle();
                    $(this).toggleClass("active");
                });
                $('#menu-gadget .menu').find('li>ul').before('<i class="fa fa-angle-down"></i>');
                $('#menu-gadget .menu li i').on("click", function () {
                    if ($(this).hasClass('fa-angle-up')) {
                        $(this).removeClass('fa-angle-up').parent('li').find('> ul').slideToggle();
                    }
                    else {
                        $(this).addClass('fa-angle-up').parent('li').find('> ul').slideToggle();
                    }
                });
                if ($('body').width() < 768) {
                    leftColumn = $('body').find('#column-left');
                    leftColumn.remove().insertAfter('#content');
                    // $("img.lazy").unveil(1, function () {
                    //     $(this).load(function () {
                    //         $(this).animate({'opacity': 1}, 700);
                    //     });
                    // });
                    $('.col-sm-3 .box-heading h3').append('<i class="fa fa-plus-circle"></i>');
                    $('.col-sm-3 .box-heading').on("click", function () {
                        if ($(this).find('i').hasClass('fa-minus-circle')) {
                            $(this).find('i').removeClass('fa-minus-circle').parents('.col-sm-3 .box').find('.box-content').slideToggle();
                        }
                        else {
                            $(this).find('i').addClass('fa-minus-circle').parents('.col-sm-3 .box').find('.box-content').slideToggle();
                        }
                    })
                }
                ;
                $('#carousel').carouFredSel({
                    auto: false,
                    items: 4,
                    direction: "left",
                    minimum: 1,
                    items: {width: 300, visible: {min: 1, max: 4}},
                    responsive: true,
                    scroll: {items: 1, duration: 500, pauseOnHover: true},
                    prev: {button: "#rel_prev", key: "left"},
                    next: {button: "#rel_next", key: "right"},
                });
                if ($('body').width() < 768) {
                    $('.tab-heading').append('<i class="fa fa-plus-circle"></i>');
                    $('.tab-heading').on("click", function () {
                        if ($(this).find('i').hasClass('fa-minus-circle')) {
                            $(this).find('i').removeClass('fa-minus-circle').parents('.tabs').find('.tab-content').slideToggle();
                        }
                        else {
                            $(this).find('i').addClass('fa-minus-circle').parents('.tabs').find('.tab-content').slideToggle();
                        }
                    })
                }
                ;

            var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
            if (!isMobile) {
                $(document).ready(function () {
                    var stickMenu = false;
                    var docWidth = $('body').find('.container').width();
                    // if (!isMobile) {
                    //     controller = new ScrollMagic();
                    //     fadein_left = $('.banners > div:nth-child(1)');
                    //     fadein_right = $('.banners > div:nth-child(2)');
                    //     fadein_left_2 = $('.advertising div.col-sm-4:nth-child(1)');
                    //     fadein_bottom_2 = $('.advertising div.col-sm-4:nth-child(2)');
                    //     fadein_right_2 = $('.advertising div.col-sm-4:nth-child(3)');
                    //     left_animate = TweenMax.from(fadein_left, 0.5, {
                    //         left: "-200px",
                    //         alpha: 0,
                    //         ease: Power1.easeOut
                    //     });
                    //     right_animate = TweenMax.from(fadein_right, 0.5, {
                    //         right: "-200px",
                    //         alpha: 0,
                    //         ease: Power1.easeOut
                    //     });
                    //     left_animate_2 = TweenMax.from(fadein_left_2, 0.5, {
                    //         left: "-200px",
                    //         alpha: 0,
                    //         ease: Power1.easeOut
                    //     });
                    //     bottom_animate_2 = TweenMax.from(fadein_bottom_2, 0.5, {
                    //         bottom: "-200px",
                    //         alpha: 0,
                    //         ease: Power1.easeOut
                    //     });
                    //     right_animate_2 = TweenMax.from(fadein_right_2, 0.5, {
                    //         right: "-200px",
                    //         alpha: 0,
                    //         ease: Power1.easeOut
                    //     });
                    //     if ($(".banners").length) {
                    //         var scene_1 = new ScrollScene({
                    //             triggerElement: ".banners",
                    //             offset: -300
                    //         }).setTween(left_animate).addTo(controller).reverse(false);
                    //         var scene_2 = new ScrollScene({
                    //             triggerElement: ".banners",
                    //             offset: -300
                    //         }).setTween(right_animate).addTo(controller).reverse(false);
                    //     }
                    //     ;
                    //     if ($(".advertising").length) {
                    //         var scene_4 = new ScrollScene({
                    //             triggerElement: ".advertising",
                    //             offset: -100
                    //         }).setTween(left_animate_2).addTo(controller).reverse(false);
                    //         var scene_5 = new ScrollScene({
                    //             triggerElement: ".advertising",
                    //             offset: -100
                    //         }).setTween(bottom_animate_2).addTo(controller).reverse(false);
                    //         var scene_6 = new ScrollScene({
                    //             triggerElement: ".advertising",
                    //             offset: -100
                    //         }).setTween(right_animate_2).addTo(controller).reverse(false);
                    //     }
                    //     ;
                    // }
                })
                function listBlocksAnimate(block, element, row, offset, difEffect) {
                    if (!isMobile) {
                        if ($(block).length) {
                            var i = 0;
                            var j = row;
                            var k = 1;
                            var effect = -1;
                            $(element).each(function () {
                                i++;
                                if (i > j) {
                                    j += row;
                                    k = i;
                                    effect = effect * (-1);
                                }
                                if (effect == -1 && difEffect == true) {
                                    ef = TweenMax.from(element + ':nth-child(' + i + ')', 0.5, {
                                        left: -1 * 200 - i * 300 + "px",
                                        alpha: 0,
                                        ease: Power1.easeOut
                                    })
                                } else {
                                    ef = TweenMax.from(element + ':nth-child(' + i + ')', 0.5, {
                                        right: -1 * 200 - i * 300 + "px",
                                        alpha: 0,
                                        ease: Power1.easeOut
                                    })
                                }
                                var scene_new = new ScrollScene({
                                    triggerElement: element + ':nth-child(' + k + ')',
                                    offset: offset,
                                }).setTween(ef).addTo(controller).reverse(false);
                            });
                        }
                    }
                }

                function listTabsAnimate(element) {
                    if (!isMobile) {
                        if ($(element).length) {
                            TweenMax.staggerFromTo(element, 0.3, {alpha: 0, rotationY: -90, ease: Power1.easeOut}, {
                                alpha: 1,
                                rotationY: 0,
                                ease: Power1.easeOut
                            }, 0.1);
                        }
                    }
                }

                // $(window).load(function () {
                //     listBlocksAnimate('.box.specials', '.box.specials .product-layout', 4, -300, true);
                //     listBlocksAnimate('.box.latest', '.box.latest .product-layout', 4, -300, true);
                //     listBlocksAnimate('#homepage-blog', '#homepage-blog li', 1, -400, true);
                //     if (!isMobile) {
                //         if ($(".parallax-1").length) {
                //             var welcome = new TimelineMax();
                //             welcome.from(".parallax-1 h4", 0.5, {top: -300, autoAlpha: 0}).from(".parallax-1 h2", 0.5, {
                //                 right: -300,
                //                 autoAlpha: 0
                //             }).from(".parallax-1 h1", 0.5, {left: -300, autoAlpha: 0}).from(".parallax-1 p", 0.5, {
                //                 right: -300,
                //                 autoAlpha: 0
                //             }).from(".parallax-1 a", 0.5, {bottom: -200, autoAlpha: 0});
                //             var scene_welcome = new ScrollScene({
                //                 triggerElement: ".parallax-1",
                //                 offset: -100
                //             }).setTween(welcome).addTo(controller).reverse(false);
                //         }
                //         if ($(".parallax-2").length) {
                //             var welcome = new TimelineMax();
                //             welcome.from(".parallax-2 h4", 0.5, {top: -300, autoAlpha: 0}).from(".parallax-2 h2", 0.5, {
                //                 right: -300,
                //                 autoAlpha: 0
                //             }).from(".parallax-2 h1", 0.5, {left: -300, autoAlpha: 0}).from(".parallax-2 p", 0.5, {
                //                 right: -300,
                //                 autoAlpha: 0
                //             }).from(".parallax-2 a", 0.5, {bottom: -200, autoAlpha: 0});
                //             var scene_welcome = new ScrollScene({
                //                 triggerElement: ".parallax-2",
                //                 offset: -100
                //             }).setTween(welcome).addTo(controller).reverse(false);
                //         }
                //         // if ($(".box_html.video_block").length) {
                //         //     var welcome = new TimelineMax();
                //         //     welcome.from(".box_html.video_block h1", 0.5, {
                //         //         top: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".box_html.video_block h1>span", 0.5, {
                //         //         right: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".box_html.video_block p", 0.5, {
                //         //         right: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".box_html.video_block a", 0.5, {bottom: -200, autoAlpha: 0});
                //         //     var scene_welcome = new ScrollScene({
                //         //         triggerElement: ".box_html.video_block",
                //         //         offset: -100
                //         //     }).setTween(welcome).addTo(controller).reverse(false);
                //         // }
                //         // if ($(".fluid_container").length) {
                //         //     var welcome = new TimelineMax();
                //         //     welcome.from(".fluid_container h4", 0.5, {
                //         //         top: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".fluid_container h2", 0.5, {
                //         //         right: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".fluid_container h1", 0.5, {
                //         //         left: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".fluid_container p", 0.5, {
                //         //         right: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".fluid_container a", 0.5, {bottom: -200, autoAlpha: 0});
                //         //     var scene_welcome = new ScrollScene({
                //         //         triggerElement: ".fluid_container",
                //         //         offset: -100
                //         //     }).setTween(welcome).addTo(controller).reverse(false);
                //         // }
                //         // if ($(".box_html.events").length) {
                //         //     var welcome = new TimelineMax();
                //         //     welcome.from(".box_html.events h1", 0.5, {
                //         //         top: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".box_html.events .col-sm-6 h2 ", 0.5, {
                //         //         left: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".box_html.events .col-sm-6 p", 0.5, {right: -300, autoAlpha: 0})
                //         //     var scene_welcome = new ScrollScene({
                //         //         triggerElement: ".box_html.events",
                //         //         offset: -100
                //         //     }).setTween(welcome).addTo(controller).reverse(false);
                //         // }
                //         // if ($(".box_html.advertising").length) {
                //         //     var welcome = new TimelineMax();
                //         //     welcome.from(".box_html.advertising h1", 0.5, {
                //         //         bottom: -200,
                //         //         autoAlpha: 0
                //         //     }).from(".box_html.advertising p", 0.5, {
                //         //         left: -300,
                //         //         autoAlpha: 0
                //         //     }).from(".box_html.advertising a", 0.5, {bottom: -300, autoAlpha: 0})
                //         //     var scene_welcome = new ScrollScene({
                //         //         triggerElement: ".box_html.advertising",
                //         //         offset: -100
                //         //     }).setTween(welcome).addTo(controller).reverse(false);
                //         // }
                //     }
                // });
            }
        }
    }
})(jQuery);
