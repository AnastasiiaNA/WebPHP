<?php

    //model
    include('./models/catalog.php');

    $model = new CatalogModel();

    $items = $model->getItems();

    //view
    include('./views/pages/catalog.html');




