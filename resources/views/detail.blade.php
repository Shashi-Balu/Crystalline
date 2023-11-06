@extends("layouts.app")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <!-- <img src="{{$product['image']}}" alt=""> -->
        </div>
        <div class="col-sm-6">
            <h4 class="title">{{$product['productName']}}</h4>
            <strong>
                <p class="price">{{$product['price']}}</p>
            </strong>
            <p class="name">{{$product['title']}}</p>
            <a href="/">Go back</a>
        </div>
        <br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-primary">Add to cart</button>
        </form>
        <br>
    </div> <button class="btn btn-success">Buy Now</button>
    <br>
</div>

@endsection