<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 9/13/17
 * Time: 10:09 PM
 */
?>
<!-- Content left -->
<div class="col-sm-5 col-lg-7 product_page-left">
    <!-- product image -->
    <div id="default_gallery" class="product-gallery">
        <div class="image-thumb">
            <ul id="image-additional">
                <?php foreach ($node->field_images[LANGUAGE_NONE] as $image): ?>
                    <li>
                        <a href="#" data-image="<?php print image_style_url('product_image', $image['uri']) ?>"
                           data-zoom-image="<?php print file_create_url($image['uri']) ?>">
                            <?php print theme('image_style', array('path' => $image['uri'], 'style_name' => 'gallery_thumb')) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="image">
            <img id="gallery_zoom"
                 src="<?php print image_style_url('product_image', $node->field_images[LANGUAGE_NONE][0]['uri']) ?>"
                 data-zoom-image="<?php print file_create_url($node->field_images[LANGUAGE_NONE][0]['uri']) ?>"
                 alt=""/>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            var myPhotoSwipe = $("#gallery a").photoSwipe({
                enableMouseWheel: false,
                enableKeyboard: false,
                captionAndToolbarAutoHideDelay: 0
            });
        });
    </script>
</div>
<!-- Content right -->
<div class="col-sm-7 col-lg-5 product_page-right">
    <div class="general_info product-info">
        <h1 class="product-title"><?php print $node->title ?></h1>
        <!-- Prodyuct rating status -->
        <div class="rating-section product-rating-status">
            <div class="rating">
                <?php print render($content['field_vote']) ?>
            </div>
        </div>
        <div class="price-section">
            <?php if (isset($node->field_price[LANGUAGE_NONE]) && $node->field_price[LANGUAGE_NONE][0]['value'] > 0): ?>
                <span class="price-new"><?php print number_format($node->field_price[LANGUAGE_NONE][0]['value']) ?>
                    đ</span>
            <?php else: ?>
                <a href="/lien-he"><span class="price-new">Liên hệ</span></a>
            <?php endif; ?>
            <?php if (isset($node->field_old_price[LANGUAGE_NONE])): ?>
                <span class="price-old"><?php print number_format($node->field_old_price[LANGUAGE_NONE][0]['value']) ?>
                    đ</span>
            <?php endif; ?>
        </div>
        <?php if (isset($node->field_model[LANGUAGE_NONE])): ?>
            <ul class="list-unstyled product-section">
                <li>Mã sản phẩm: <span><?php print $node->field_model[LANGUAGE_NONE][0]['value'] ?></span></li>
            </ul>
        <?php endif; ?>
    </div>
    <div id="product">
        <div class="product-share">
            <?php print render($content['links']); ?>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<!-- Product description -->
<div id="tab-description" class="product-desc product-section">
    <h3 class="product-section_title">Chi Tiết Sản Phẩm</h3>
    <?php print $node->body[LANGUAGE_NONE][0]['value'] ?>
    <div class="clearfix"></div>
</div>


<!-- Product reviews -->
<?php print views_embed_view('relate_products','block', $node->field_category[LANGUAGE_NONE][0]['tid']); ?>


