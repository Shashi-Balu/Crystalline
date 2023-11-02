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