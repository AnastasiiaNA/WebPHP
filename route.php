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
        $page = 'views/pages/contacts.php';
        break;
    case '/signin':
        $page = 'views/pages/signin.php';
        break;
    case '/auth/login':
        login($_POST);
        break;
    case '/auth/registration':
        registration($_POST);
        break;
    case '/signup':
        $page = 'views/pages/signup.php';
        break;
    case '/auth/signout':
        //remove current user from session and redirect to main page
        signout();
        break;
    case '/cart':
        $page = 'views/pagescart.php';
        break;
    //using regexp to show all item-page http://qaru.site/questions/145877/regexp-in-switch-statement
    case (preg_match('/\/product/i', $location) ? true : false):
        $page = 'views/pages/product.php';
        break;
    default:
        header('Location: /catalog');
        break;
}
