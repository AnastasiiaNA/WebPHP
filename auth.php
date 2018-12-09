<?php
    function login($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

        $login = isset($post['email']) ? $post['email'] : '';
        $password = isset($post['password']) ? $post['password'] : '';

        $query = 'SELECT users.id, users.first_name, users.last_name FROM users WHERE users.email = \'' . $login . '\' AND users.password = \'' . $password . '\'';

        $user = $mysqli->query($query)->fetch_assoc();
        if(!isset($user)) {
            $_SESSION['signinEroor'] = 'Your email or password is invalid';
            header('Location: /signin');
            die();
        }

        $_SESSION['user'] = $user;
        if(isset($_SESSION['signinEroor'])) unset($_SESSION['signinEroor']);
        header('Location: /catalog');
    }
