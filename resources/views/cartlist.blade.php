@extends('layouts.app')
@section('content')

<h2 class="title heading">My Cart</h2>

@foreach($products as $item)
<div class="details-container">
    <img src="{{$item->image }}" alt="" class="item-img" width="200" height="200">
    <div class="item-text">
        <div class="">
            <h4 class="title">{{$item->productName}}</h4>
            <p class="price">{{$item->price}}</p>
            <p class="name">{{$item->title}}</p>
        </div>

        <div class="order">
            <a href="ordernow" class="register-button">Order Now</a>
            <a href="/removecart/{{$item->cart_id}}" class="login-button">Remove From Cart</a>

        </div>

    </div>

</div>

@endforeach
@endsection