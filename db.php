<?php
    $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
    $mysqli->select_db('laba1php') or die('DB not exist');
?>
