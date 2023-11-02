document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".hero-images");
    let index = 0;

    function showImage() {
        images.forEach((img) => (img.style.opacity = 0));
        images[index].style.opacity = 1;
        index = (index + 1) % images.length;
    }
    setInterval(showImage, 10000);

    const productsData = [
        {
            name: "Elegant Crystal Tumbler",
            image: "",
            title: "Premium Collection",
            price: "$24.99",
        },
        {
            name: "Sophisticate Wine Glasses",
            image: "",
            title: "Luxury Series",
            price: "$29.99",
        },
        {
            name: "Opulent Champagne Flutes",
            image: "",
            title: "Crystal Elegance",
            price: "$34.99",
        },
        {
            name: "Regal Whiskey Decanter",
            image: "",
            title: "Royal Edition",
            price: "$39.99",
        },
        {
            name: "Grand Goblet Set",
            image: "",
            title: "Opulence Series",
            price: "$27.99",
        },
        {
            name: "Exquisite Martini Glasses",
            image: "",
            title: "Signature Collection",
            price: "$31.99",
        },
        {
            name: "Majestic Highball Glasses",
            image: "",
            title: "Classic Style",
            price: "$22.99",
        },
        {
            name: "Sumptuous Wine Decanter",
            image: "",
            title: "Vintage Charm",
            price: "$45.99",
        },
        {
            name: "Royal Crystal Carafe",
            image: "",
            title: "Elite Edition",
            price: "$49.99",
        },
        // ... Repeat for other products
    ];

    // Get the products container
    const productsContainer = document.getElementById("products-container");

    productsData.forEach((product) => {
        const productElement = createProductElement(product);
        productsContainer.appendChild(productElement);
    });

    function createProductElement(product) {
        const productDiv = document.createElement("div");
        productDiv.classList.add("product");

        const productName = document.createElement("h3");
        productName.textContent = product.name;

        const productTitle = document.createElement("p");
        productTitle.textContent = product.title;

        const productPrice = document.createElement("p");
        productPrice.textContent = `Price: ${product.price}`;

        productDiv.appendChild(productName);
        productDiv.appendChild(productTitle);
        productDiv.appendChild(productPrice);

        return productDiv;
    }
});
