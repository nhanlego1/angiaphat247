<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="box latest">
    <div class="box-heading">
        <div class="navigations">
            <a class="prev" id="l_prev" href="#"><span><i class="fa fa-chevron-left"></i></span></a>
            <a class="next" id="l_next" href="#"><span><i class="fa fa-chevron-right"></i></span></a>
        </div>
        <h3 style="text-transform: uppercase"><?php print t('Sản Phẩm Mới') ?></h3>
    </div>
    <div class="box-content">
        <div class="product-layout">
            <ul class="latest-scroll">
                <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>