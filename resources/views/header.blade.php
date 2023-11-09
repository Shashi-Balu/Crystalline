<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar">

    <a class="link" href="/">
        <h1>Crystalline</h1>
    </a>
    <a class="link" href="/products">Our Products</a>
    <a class="link" href="/cartlist">Cart({{$total}})</a>
    @if(Session::has('user'))
    <a class="link" href="#">
        <span class="caret">{{Session::get('user')['name']}}</span>
    </a>
    <a class="link" href="/logout">Logout</a>
    @else
    <a class="link" href="/login">Login</a>
    <a class="link" href="/register">Register</a>
    @endif
</nav>