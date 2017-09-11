<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 9/12/17
 * Time: 12:44 AM
 */
?>

<div class="ticket-result">
    <div class="result">
        <div class="ticket-result-first_leg">
            <div class="heading">
                <h4><?php if($type=='oneway'): ?>Chặn đi <?php else: ?>Chặn về <?php endif; ?>: <?php print $data['Details'][0]['From'] ?> <img alt="airplane-icon"
                                                        src="/sites/all/modules/custom/booking/assets/images/airplane-icon.png">
                    <?php print $data['Details'][0]['To'] ?> -
                    Ngày <?php print date('d/m/Y',strtotime($data['DepartTime'])) ?> </h4>
            </div>
            <div>
                <ul class="tbl-ticket-result">
                    <div class="title-header-warapper">
                        <ul class="title-header">
                            <li>Hãng</li>
                            <li>Mã</li>
                            <li>Giờ Bay</li>
                            <li>Giá Vé</li>
                        </ul>
                    </div>
                    <li class="detail-wrapper">
                        <div class="logo-airline <?php print strtolower($data['AirlineCode']) ?>">
                        </div>
                        <div class="flight-number"><?php print $data['FlightNumber'] ?></div>
                        <div class="depart-time"><?php print BookingHelper::getTime($data['DepartTime'])?> - <?php print BookingHelper::getTime($data['LandingTime'])?></div>
                        <div class="price">
                            <?php if(isset($data['TicketOptions'][0])): ?>
                                <span><?php print getPrice($data['TicketOptions'][0]['TotalPrice'], 'N\A','tax',true,'VN') ?></span>
                            <?php else: ?>
                            <span><?php print getPrice($data['TotalPrice'], 'N\A','tax',true,'VN') ?></span>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>