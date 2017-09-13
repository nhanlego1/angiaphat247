<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 9/13/17
 * Time: 9:31 PM
 */
?>
<?php $count = count($rows) ?>
<?php foreach ($rows as $id => $row): ?>
    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <?php print $row; ?>
    </div>
<?php endforeach; ?>
