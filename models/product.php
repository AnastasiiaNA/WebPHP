<?php

class ProductModel {

    public function getProduct() {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');
        $product_id = intval($_GET['id']);
        $prod = $mysqli->query('SELECT * FROM products WHERE id = ' . $product_id);
        $product = $prod->fetch_assoc();

        return $product;
    }
}





