@extends('layouts.app')

@section('content')
<header>
    <div class="hero-images-container">
        <img src="{{ asset('assets/images/glass-1.jpg') }}" alt="Hero-Images" class="hero-images">
        <img src="{{ asset('assets/images/glass-2.jpg') }}" alt="Hero-Images" class="hero-images">
        <img src="{{ asset('assets/images/glass-3.jpg') }}" alt="Hero-Images" class="hero-images">
        <img src="{{ asset('assets/images/glass-4.jpg') }}" alt="Hero-Images" class="hero-images">
    </div>
</header>

<section>
    <div class="hero-text">
        <h1>Crystalline</h1>
        <div class="subtitle-container">
            <div class="subtitle">
                <h3 class="hero-subtitle">Crafted for elegance</h3>
                <h3 class="hero-subtitle">Experience the allure</h3>
            </div>
            <div class="arrow-section">
                <p class="arrow-icon">&darr;</p>
                <p class="scroll">Scroll down</p>
            </div>
        </div>
    </div>
</section>

<section id="products">
    <h2 class="our-products">Our Products</h2>
    <div id="products-container"></div>
    <a class="all-products" href="/products"><button class="button all-products">See all Products</button></a>
</section>

<section>
    <h2 class="why-crystalline">Why choose Crystalline</h2>
    <div class="para-container">
        <p class="why-para">
            Crystalline stands as a beacon of sophistication and refined
            craftsmanship in the world of luxury glassware. Each piece is
            a testament to the dedication to elegance, meticulously crafted
            to perfection. The brand's commitment to premium materials and
            timeless design ensures that every product exudes a sense of
            opulence. Whether it's the crystal-clear tumblers or the
            majestic wine decanters, each item reflects a harmonious
            blend of aesthetic appeal and functional excellence.
            Choosing Crystalline means choosing the epitome of elegance
            for those special moments and celebrations where only the
            finest will suffice.
        </p>
        <img src="../assets/images/image-7.jpg" alt="img" class="side-img">
    </div>


</section>
<!-- Your HTML and other content -->

<script>
    @if(Session::has('alert'))

    alert("{{ Session::get('alert') }}");

    @endif
</script>


@endsection