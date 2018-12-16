<?php
    require('./db.php');
    $query = 'SELECT products.* FROM carts JOIN products ON carts.product_id = products.id WHERE carts.user_id = '.intval($_SESSION['user']['id']);
    $items = $mysqli->query($query);

    //calculate total price
    $total_price = 0;
    foreach($items as $item) {
        $total_price += $item['price'];
    }
?>
<div class="row">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">Total: <?= $total_price?></h5>
                    </div>
                    <div class="col text-right">
                        <a href="#" class="btn btn-success">Buy</a>
                        <a href="#" class="btn btn-danger">Clear cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="row">
            <?php foreach ($items as $item ): ?>
                <!-- building the path to component starting from index.php because catalog.php will be loaded to index.php -->
                <?php require('./components/item-card.php') ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
