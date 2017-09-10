<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="events_wrap clearfix">
    <h2 style="visibility: inherit; opacity: 1; top: 0px;"><?php print t('BLOG') ?></h2>
    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </div>
    <div class="clear"></div>
    <a class="readmore" href="/blog" style="visibility: inherit; opacity: 1; bottom: 0px;"><?php print t('XEM THÊM') ?></a>
</div>
