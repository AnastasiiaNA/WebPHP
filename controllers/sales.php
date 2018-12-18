<?php
    function addToCart($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

    }

    function removeFromCart($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

    }
    function buy($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

    }
    function clearCart($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

    }
