<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 007 07.12.18
 * Time: 20:11
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/home">Laba1PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <!-- using $location to highlight current menu item -->
            <li class="nav-item <?=$location == '/home' ? 'active' : ''?>">
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item <?=$location == '/catalog' ? 'active' : ''?>">
                <a class="nav-link" href="/catalog">Catalog</a>
            </li>
            <li class="nav-item <?=$location == '/contacts' ? 'active' : ''?>">
                <a class="nav-link" href="/contacts">Contacts</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled" href="#">Disabled</a>-->
<!--            </li>-->
        </ul>
        <ul class="navbar-nav sign-panel">
            <!-- using $location to highlight current menu item -->
            <li class="nav-item <?=$location == '/signin' ? 'active' : ''?>">
                <a class="nav-link" href="/signin">Sign in</a>
            </li>
            <li class="nav-item <?=$location == '/signup' ? 'active' : ''?>">
                <a class="nav-link" href="/signup">Sign up</a>
            </li>
        </ul>
    </div>
</nav>
