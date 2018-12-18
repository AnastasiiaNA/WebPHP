<?php
    require('auth.php');
    session_start();
    // get location from URI
    $location = $_SERVER['REQUEST_URI'];

    // choose the current page depend on location
    switch ($location) {
        case '/catalog':
            $page = 'catalog.php';
            break;
        case '/contacts':
            $page = 'contacts.php';
            break;
        case '/signin':
            $page = 'signin.php';
            break;
        case '/auth/login':
            login($_POST);
            break;
        case '/auth/registration':
            registration($_POST);
            break;
        case '/signup':
            $page = 'signup.php';
            break;
        case '/auth/signout':
            //remove current user from session and redirect to main page
            signout();
            break;
        case '/cart':
            $page = 'cart.php';
            break;
        //using regexp to show all item-page http://qaru.site/questions/145877/regexp-in-switch-statement
        case (preg_match('/\/product/i', $location) ? true : false):
            $page = 'product.php';
            break;
        default:
            header('Location: /catalog');
            break;
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/main.css">
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


        <title>Laba1PHP</title>
    </head>
    <body>
    <?php require('components/navigation.php') ?>
    <div class="container">
        <?php require( 'pages/'.$page ) ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
