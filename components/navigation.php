<?php
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/catalog">Laba1PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <!-- using $location to highlight current menu item -->
            <li class="nav-item <?=$location == '/catalog' ? 'active' : ''?>">
                <a class="nav-link" href="/catalog">Catalog</a>
            </li>
            <li class="nav-item <?=$location == '/contacts' ? 'active' : ''?>">
                <a class="nav-link" href="/contacts">Contacts</a>
            </li>
        </ul>
        <ul class="navbar-nav sign-panel">
            <?php if(!isset($_SESSION['user'])) { ?>
            <!-- using $location to highlight current menu item -->
            <li class="nav-item <?=$location == '/signin' ? 'active' : ''?>">
                <a class="nav-link" href="/signin">Sign in</a>
            </li>
            <li class="nav-item <?=$location == '/signup' ? 'active' : ''?>">
                <a class="nav-link" href="/signup">Sign up</a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <span class="nav-link"><?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name']?></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="auth/signout">Sign out</a>
            </li>
            <li class="nav-item <?=$location == '/cart' ? 'active' : ''?>">
                <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>
