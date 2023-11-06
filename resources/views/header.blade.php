<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}


?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="/">Crystalline</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Account</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist">cart ({{$total}})</a></li>
                @if(Session::has('user'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"><span class="caret">{{Session::get('user')['name']}}</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
                @else
                <li><a href="#">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>