<?php

    function getItems() {
        require('./db.php');
        $items = $mysqli->query('SELECT * FROM products');
        return $items;
    }


