<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 9/9/17
 * Time: 11:57 PM
 */
?>
<div class="facebook info">
    <div class="box-heading">
        <h3><?php print t('Facebook Fanpage'); ?></h3>
    </div>
    <div class="box-content">
        <div class="find-info__likebox" id="likebox">
            <div class="fb-page" id="fb-page" data-href="<?php print variable_get('fanpage','https://www.facebook.com/angiaphat247/')?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-width="500" data-height="440">
                <blockquote class="fb-xfbml-parse-ignore" cite="<?php print variable_get('fanpage','https://www.facebook.com/angiaphat247/')?>"><a href="<?php print variable_get('fanpage','https://www.facebook.com/angiaphat247/')?>">Hàng xách tay giá tốt</a></blockquote>
            </div>
        </div>
    </div>
</div>
