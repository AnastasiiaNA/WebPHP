<?php

class CatalogModel {

    public function getItems() {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');
        $items = $mysqli->query('SELECT * FROM products');
        return $items;
    }
}





