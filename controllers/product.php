<?php

    //model
    include('./models/product.php');

    $model = new ProductModel();

    $product = $model->getProduct();

    //view
    include('./views/pages/product.html');




