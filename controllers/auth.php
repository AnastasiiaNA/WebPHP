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

    function registration($post) {
        $mysqli = new mysqli('localhost', 'root', 'RootAdmin') or die('Connection to DB failed');
        $mysqli->select_db('laba1php') or die('DB not exist');

        $login = isset($post['email']) ? $post['email'] : '';
        $password = isset($post['password']) ? $post['password'] : '';
        $password_conf = isset($post['password_conf']) ? $post['password_conf'] : '';
        $first_name = isset($post['first_name']) ? $post['first_name'] : '';
        $last_name = isset($post['last_name']) ? $post['last_name'] : '';
        $phone = isset($post['phone']) ? $post['phone'] : '';

        // check existing email
        $query = 'SELECT users.id, users.first_name, users.last_name FROM users WHERE users.email = \'' . $login . '\'';

        $user = $mysqli->query($query)->fetch_assoc();
        if(isset($user)) {
            $_SESSION['signupEroor'] = 'User with email: ' . $login . ' already registered';
            header('Location: /signup');
            die();
        } else if ($password != '' && $password_conf != '' && $password == $password_conf) { //check passwords

            // insert new user in db
            $query = 'INSERT INTO users (first_name, last_name, email, phone, password)'.
                     ' VALUES ('.'\''.$first_name.'\','.'\''. $last_name .'\','.'\''.$login.'\','.'\''.$phone.'\','.'\''.$password.'\''.')';
            $result = $mysqli->query($query);

            if($result) {
                // get new user ang go to catalog
                $get_query = 'SELECT users.id, users.first_name, users.last_name FROM users WHERE users.email = \'' . $login . '\'';
                $new_user = $mysqli->query($get_query)->fetch_assoc();
                $_SESSION['user'] = $new_user;

                if(isset($_SESSION['signupEroor'])) unset($_SESSION['signupEroor']);
                header('Location: /catalog');
            } else {
                $_SESSION['signupEroor'] = 'Failed the new user creation - DB Error';
            }

        } else {
            $_SESSION['signupEroor'] = 'Your password and password confirmation not the same';
            header('Location: /signup');
            die();
        }
    }

    function signout() {
        unset($_SESSION['user']);
        header('Location: /catalog');
    }
