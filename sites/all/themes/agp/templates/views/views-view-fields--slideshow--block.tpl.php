<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 9/9/17
 * Time: 9:54 PM
 */
//print_r($fields['field_color_style']->content);
?>

<div class="cameraContent">
    <div class="camera_caption <?php if($fields['field_color_style']->content == 1): ?> dark <?php endif ?>">
        <h1><?php print $fields['title']->content ?></h1>
        <?php print $fields['body']->content; ?>
        <a href="<?php print $fields['field_link']->content ?>"><?php print t('XEM THÊM') ?>!</a>
    </div>
    <?php print $fields['field_image']->content ?>
</div>
