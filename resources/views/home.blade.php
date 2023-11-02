<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crystalline</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logo (1).svg')}}" type="image/x-icon">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Crimson+Text:ital,wght@1,600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="logo">Crystalline</h1>
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
                    <h3 class="hero-subtitle">Experience the allure </h3>
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
    </section>


    <script src=" {{ asset('js/main.js') }}">
    </script>
</body>

</html>