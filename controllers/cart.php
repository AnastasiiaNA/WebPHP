<?php

    //model
    include('./models/cart.php');

    $model = new CartModel();

    $data = $model->getItems();

    //view
    include('./views/pages/cart.html');




