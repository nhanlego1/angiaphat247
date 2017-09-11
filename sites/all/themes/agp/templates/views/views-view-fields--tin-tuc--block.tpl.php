<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 9/10/17
 * Time: 9:40 PM
 */
?>

<div class="col-sm-6">
    <div class="blog-image">
        <?php print $fields['field_image']->content ?>
    </div>
    <div class="blog-desc">
        <h3><a href="<?php print url('node/'.$fields['nid']->content) ?>"><?php print summary($fields['title']->content,60,true) ?></a></h3>
        <p><?php print summary($fields['body']->content, 75) ?></p>
    </div>

</div>
