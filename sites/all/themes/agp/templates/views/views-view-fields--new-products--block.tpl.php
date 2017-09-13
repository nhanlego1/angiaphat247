<?php
/**
 * Author: Nhan
 * Views fields custom
 */
$node = node_load($fields['nid']->raw);
//dsm($fields);
?>
<li>
    <div class="product-thumb transition">
        <a class="quickview quickview-latest" rel="group"
           href="#quickview_latest_<?php print $node->nid ?>"><?php print t('Xem thêm') ?></a>
        <div class="quick_info">
            <div id="quickview_latest_<?php print $node->nid ?>">
                <div>
                    <div class="left col-sm-4">
                        <div class="quickview_image image">
                            <a href="<?php print url('node/' . $node->nid) ?>">
                                <?php print $fields['field_images']->content; ?>
                            </a>
                        </div>
                    </div>
                    <div class="right col-sm-8">
                        <h2><?php print $node->title ?></h2>
                        <div class="inf">
                            <?php if (isset($node->field_model[LANGUAGE_NONE])): ?>
                                <p class="product_model model">
                                    Model: <?php print $node->field_model['und'][0]['value'] ?></p>
                            <?php endif; ?>
                            <div class="price">
                                <?php if (isset($node->field_price[LANGUAGE_NONE]) && $node->field_price[LANGUAGE_NONE][0]['value'] > 0): ?>
                                    <span class="price-new"><?php print $fields['field_price']->content ?></span>
                                <?php else: ?>
                                    <a href="/lien-he"><span class="price-new">Liên hệ</span></a>
                                <?php endif; ?>
                                <?php if (isset($node->field_old_price[LANGUAGE_NONE]) && $node->field_old_price[LANGUAGE_NONE][0]['value'] > 0): ?>
                                    <span class="price-old"><?php print $fields['field_old_price']->content ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="clear"></div>
                        <div class="rating">
                            <?php print $fields['field_vote']->content ?>
                        </div>

                    </div>
                    <div class="col-sm-12">
                        <div class="quickview_description description">
                            <?php print $node->body[LANGUAGE_NONE][0]['value'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new_pr">New!</div>
        <div class="image">
            <a href="<?php print url('node/' . $node->nid) ?>">
                <?php print $fields['field_images']->content; ?>
            </a>
        </div>
        <div class="caption">
            <div class="name">
                <a href="<?php print url('node/' . $node->nid) ?>">
                    <?php print $node->title; ?>
                </a>
            </div>

            <div class="price">
                <?php if (isset($node->field_price[LANGUAGE_NONE]) && $node->field_price[LANGUAGE_NONE][0]['value'] > 0): ?>
                    <span class="price-new"><?php print $fields['field_price']->content ?></span>
                <?php else: ?>
                    <a href="/lien-he"><span class="price-new">Liên hệ</span></a>
                <?php endif; ?>
                <?php if (isset($node->field_old_price[LANGUAGE_NONE]) && $node->field_old_price[LANGUAGE_NONE][0]['value'] > 0): ?>
                    <span class="price-old"><?php print $fields['field_old_price']->content ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="cart-button">
            <button class="btn btn-add" type="button"
            ">
            <span class="hidden">Add to Cart</span>
            <i class="fa fa-shopping-cart"></i>
            </button>
            <a class="btn details"
               href="<?php print url('node/' . $node->nid) ?>">
                <span class="hidden">Details</span>
                <i class="fa fa-info"></i>
            </a>
        </div>
        <div class="rating">
            <?php print $fields['field_vote']->content ?>
        </div>
        <div class="clear"></div>
    </div>
</li>