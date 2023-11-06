@extends("layouts.app")
@section("content")

<div class="container custom-products">
    @foreach($products as $item)
    <a href="detail/{{$item['id']}}">
        <h4 class="title">{{$item['productName']}}</h4>
        <strong>
            <p class="price">{{$item['price']}}</p>
        </strong>
        <p class="name">{{$item['title']}}</p>
        <img src="{{ public_path($item['image']) }}" alt="" class="itemImg" width="200" height="200">
    </a>
    @endforeach
</div>

@endsection