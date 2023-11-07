@extends('layouts.app')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a href="ordernow" class="btn btn-success">Order Now</a>
            @foreach($products as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">


                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                            <h2>{{$item->productName}}</h2>
                            <p>{{$item->title}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection