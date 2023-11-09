@extends('layouts.app')
@section('content')

<div class="order order-now">
    @foreach(DB::table('cart')
    ->join('products', 'cart.product_id', 'products.id')
    ->where('cart.user_id', Session::get('user')['id'])
    ->select('products.*', 'cart.id as cart_id')
    ->get() as $item)
    <div class="order-item"><img src="{{$item->image}}" alt="{{$item->productName}}" width="200" height="200">
        <p>Product: {{$item->productName}}</p>
        <p>Price: {{$item->price}} Rupees</p>
        <p>Total Amount: {{$item->price}} Rupees</p>
    </div>
    @endforeach

    <form method="POST" action="/orderplace">
        @csrf
        <p class="address">Address</p><textarea placeholder="enter your address" name="address" class="form-control" cols="50" rows="3"> </textarea>

        <div class="payment">
            <label class="title">Payment Method</label>
            <p><input type="radio" value="cash" name="payment"> Online Payment</p>
            <p><input type="radio" value="cash" name="payment"> EMI Payment</p>
            <p><input type="radio" value="cash" name="payment"> Payment on Delivery</p>
            <button type="submit" class="register-button">Order Now</button>
        </div>

    </form>

</div>
@endsection