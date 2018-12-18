<?php
    function addToCart($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

        $product_id = isset($post['product_id']) ? $post['product_id'] : '';
        $user_id = isset($post['user_id']) ? $post['user_id'] : '';

        var_dump($product_id, $user_id);exit;

    }

    function removeFromCart($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

        $product_id = isset($post['product_id']) ? $post['product_id'] : '';
        $user_id = isset($post['user_id']) ? $post['user_id'] : '';

        var_dump($product_id, $user_id);exit;

    }
    function buy($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

    }
    function clearCart($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

    }
