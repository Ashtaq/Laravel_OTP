// Add to Cart functionality
document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.btn-primary');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Add animation class
            button.classList.add('animate__animated', 'animate__pulse');

            // Get product details
            const productCard = button.closest('.product-card');
            const productData = {
                id: productCard.getAttribute('data-id'),
                name: productCard.querySelector('.product-name').textContent,
                price: productCard.querySelector('.product-price').textContent,
                image: productCard.querySelector('img').src
            };

            // Add to wishlist in localStorage
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            if (!wishlist.some(item => item.id === productData.id)) {
                wishlist.push(productData);
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                alert('Product added to wishlist!');
            } else {
                alert('Product is already in wishlist!');
            }

            // Remove animation class after animation ends
            setTimeout(() => {
                button.classList.remove('animate__animated', 'animate__pulse');
            }, 1000);
        });
    });
});

// Form submission handling
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Thank you for your message! We will get back to you soon.');
        contactForm.reset();
    });
}

// Career application handling
const applyButtons = document.querySelectorAll('.career-card .btn');
applyButtons.forEach(button => {
    button.addEventListener('click', function () {
        alert('Thank you for your interest! Please send your resume to careers@shopease.com');
    });
});

// Product filtering functionality
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const products = document.querySelectorAll('.product-card');

    // Add filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const category = this.getAttribute('data-filter');

            products.forEach(product => {
                if (category === 'all') {
                    product.style.display = 'block';
                } else if (product.getAttribute('data-category') === category) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });
}); 