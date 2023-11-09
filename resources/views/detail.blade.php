@extends("layouts.app")
@section("content")

<h2 class="title heading">Product</h2>
<div class="details-container">
    <img src="{{$product['image'] }}" alt="" class="item-img" width="200" height="200">
    <div class="item-text">
        <h4 class="title">{{$product['productName']}}</h4>
        <strong>
            <p class="price">{{$product['price']}}</p>
        </strong>
        <p class="name">{{$product['title']}}</p>


        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="cart-button">Add to cart</button>
        </form>
        <button class="buy-button">Buy Now</button>

    </div>
</div>
<a class="go-back" href="/">Go back</a>


@endsection