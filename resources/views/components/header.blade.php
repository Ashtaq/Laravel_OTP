    <!-- Hero Slider Section -->
    <section class="hero-slider">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da" class="d-block w-100" alt="Shopping Banner 1" style="height: 600px; object-fit: cover;">
                    <div class="carousel-caption">
                        <h1 class="display-4 animate__animated animate__fadeInDown">Welcome to ShopEase</h1>
                        <p class="animate__animated animate__fadeInUp">Discover amazing deals on trending products</p>
                        <a href=" {{url('/products')}}" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f" class="d-block w-100" alt="Shopping Banner 2" style="height: 600px; object-fit: cover;">
                    <div class="carousel-caption">
                        <h1 class="display-4 animate__animated animate__fadeInDown">Summer Collection</h1>
                        <p class="animate__animated animate__fadeInUp">Get up to 50% off on summer essentials</p>
                        <a href=" {{url('/products')}}" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">View Collection</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1607082350899-7e105aa886ae" class="d-block w-100" alt="Shopping Banner 3" style="height: 600px; object-fit: cover;">
                    <div class="carousel-caption">
                        <h1 class="display-4 animate__animated animate__fadeInDown">New Arrivals</h1>
                        <p class="animate__animated animate__fadeInUp">Check out our latest products</p>
                        <a href=" {{url('/products')}}" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">Explore Now</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>