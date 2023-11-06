@extends('layouts.app')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($products as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->'image}}" alt="">

                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                            <h2>{{$item->'productName'}}</h2>
                            <p>{{$item->'title'}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-warning">Remove from Cart</button>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection