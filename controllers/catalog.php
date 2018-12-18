<?php
    //view
    require ('./views/pages/catalog.php');
    //model
    require('./models/catalog.php');

    $items = getItems();
