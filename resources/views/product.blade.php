@extends("layouts.app")
@section("content")

<h2 class="our-products" style="margin-left: 4rem;">Our Products</h2>
<div class="custom-products">
    @foreach($products as $item)
    <a href="detail/{{$item['id']}}" class="item-tag">
        <img src="{{$item['image'] }}" alt="" class="item-img" width="200" height="200">
        <h4 class="title">{{$item['productName']}}</h4>
        <strong>
            <p class="price">{{$item['price']}}</p>
        </strong>
        <p class="name">{{$item['title']}}</p>

    </a>
    @endforeach
</div>

@endsection