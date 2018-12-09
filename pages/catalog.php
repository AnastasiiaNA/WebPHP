<?php
    require('./db.php');
    $items = $mysqli->query('SELECT * FROM products');

?>
<div class="row">
    <div class="col-12 mt-4">
        <div class="row">
            <?php foreach ($items as $item ): ?>
                <!-- building the path to component starting from index.php because catalog.php will be loaded to index.php -->
                <?php require('./components/item-card.php') ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
