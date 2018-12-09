<?php
    $items = [
        [
            'id' => 1,
            'img' => '../img/item_1.jpg',
            'title' => 'Ring',
            'sizes' => '16, 17, 18, 19, 22',
            'description' => 'Simple gold ring',
            'price' => 358,
            'material' => 'gold'
        ],
        [
            'id' => 2,
            'img' => '../img/item_2.jpg',
            'title' => 'Ring',
            'sizes' => '16, 17, 18, 19, 22',
            'description' => 'Simple gold ring',
            'price' => 358,
            'material' => 'gold'
        ],
        [
            'id' => 3,
            'img' => '../img/item_3.jpg',
            'title' => 'Ring',
            'sizes' => '16, 17, 18, 19, 22',
            'description' => 'Simple gold ring',
            'price' => 358,
            'material' => 'gold'
        ],
        [
            'id' => 4,
            'img' => '../img/item_4.jpg',
            'title' => 'Ring',
            'sizes' => '16, 17, 18, 19, 22',
            'description' => 'Simple gold ring',
            'price' => 358,
            'material' => 'gold'
        ]
    ];
?>
<div class="row">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">Total: 5607</h5>
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
