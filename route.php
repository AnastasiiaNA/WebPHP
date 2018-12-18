<?php
require('controllers/auth.php');
session_start();
// get location from URI
$location = $_SERVER['REQUEST_URI'];

// choose the current page depend on location
switch ($location) {
    case '/catalog':
        $page = 'controllers/catalog.php';
        break;
    case '/contacts':
        $page = 'views/pages/contacts.html';
        break;
    case '/signin':
        $page = 'views/pages/signin.html';
        break;
    case '/auth/login':
        login($_POST);
        break;
    case '/auth/registration':
        registration($_POST);
        break;
    case '/signup':
        $page = 'views/pages/signup.html';
        break;
    case '/auth/signout':
        //remove current user from session and redirect to main page
        signout();
        break;
    case '/cart':
        $page = 'controllers/cart.php';
        break;
    //using regexp to show all item-page http://qaru.site/questions/145877/regexp-in-switch-statement
    case (preg_match('/\/product/i', $location) ? true : false):
        $page = 'controllers/product.php';
        break;
    default:
        header('Location: /catalog');
        break;
}
