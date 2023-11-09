document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".hero-images");
    let index = 0;

    function showImage() {
        images.forEach((img) => (img.style.opacity = 0));
        images[index].style.opacity = 1;
        index = (index + 1) % images.length;
    }
    setInterval(showImage, 5000);

    const productsData = [
        {
            name: "Elegant Crystal Tumbler",
            image: "https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            title: "Premium Collection",
            price: "$24.99",
        },
        {
            name: "Sophisticate Wine Glasses",
            image: "https://images.unsplash.com/photo-1544145945-f90425340c7e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZHJpbmt8ZW58MHx8MHx8fDA%3D",
            title: "Luxury Series",
            price: "$29.99",
        },
        {
            name: "Opulent Champagne Flutes",
            image: "https://images.unsplash.com/photo-1497534446932-c925b458314e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGRyaW5rfGVufDB8fDB8fHww",
            title: "Crystal Elegance",
            price: "$34.99",
        },
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

        const productImage = document.createElement("img");
        productImage.src = product.image;
        productDiv.appendChild(productImage);

        productDiv.appendChild(productImage);
        productDiv.appendChild(productName);
        productDiv.appendChild(productTitle);
        productDiv.appendChild(productPrice);

        return productDiv;
    }
});
