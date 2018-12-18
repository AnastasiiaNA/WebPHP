<?php

class CartModel {

    public function getItems() {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');
        $query = 'SELECT products.* FROM carts JOIN products ON carts.product_id = products.id WHERE carts.user_id = '.intval($_SESSION['user']['id']);
        $items = $mysqli->query($query);

        //calculate total price
        $total_price = 0;
        foreach($items as $item) {
            $total_price += $item['price'];
        }

        $data = ['items' => $items, 'total_price' => $total_price];

        return $data;
    }
}





