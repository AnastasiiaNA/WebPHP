<?php
    require('./db.php');
    $product_id = $_GET['id'];
    $prod = $mysqli->query('SELECT * FROM products WHERE id = ' . $product_id);
    $product = $prod->fetch_assoc();
?>
<div class="row mt-4">
    <div class="col-12">
        <h1><?= $product['title']?></h1>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-4">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="<?= $product['img']?>" alt="<?= $product['title']?>">
            </div>
        </div>
        <div class="col mt-4">
            <a href="#" class="btn btn-success">Buy</a>
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?= $product['title']?></h5>
            <p class="card-text">Price: <?= $product['price']?></p>
            <p class="simple-text">Material: <?= $product['material']?></p>
            <p class="simple-text">Sizes: <?= $product['sizes']?></p>
            <p class="card-text"><?= $product['description']?></p>
    </div>
</div>

