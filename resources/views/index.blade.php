<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopEase - Your Shopping Destination</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="style.css" rel="stylesheet" />
    <link href="navbar.css" rel="stylesheet" />
  </head>
  <body>
    @include('components.navigation')
    @include('components.navbar')
    @include('components.header')
 


    <!-- Features Section -->
    <section class="features py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-center animate__animated animate__fadeIn">
            <div class="feature-box p-4">
              <i class="bi bi-truck text-primary display-4"></i>
              <h5 class="mt-3">Free Shipping</h5>
              <p class="text-muted">On orders over $50</p>
            </div>
          </div>
          <div class="col-md-3 text-center animate__animated animate__fadeIn">
            <div class="feature-box p-4">
              <i class="bi bi-shield-check text-primary display-4"></i>
              <h5 class="mt-3">Secure Payment</h5>
              <p class="text-muted">100% secure payment</p>
            </div>
          </div>
          <div class="col-md-3 text-center animate__animated animate__fadeIn">
            <div class="feature-box p-4">
              <i
                class="bi bi-arrow-counterclockwise text-primary display-4"
              ></i>
              <h5 class="mt-3">Easy Returns</h5>
              <p class="text-muted">30 days return policy</p>
            </div>
          </div>
          <div class="col-md-3 text-center animate__animated animate__fadeIn">
            <div class="feature-box p-4">
              <i class="bi bi-headset text-primary display-4"></i>
              <h5 class="mt-3">24/7 Support</h5>
              <p class="text-muted">Dedicated support</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Categories with Hover Effect -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-4">Featured Categories</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="category-card animate__animated animate__fadeIn">
              <img
                src="https://images.unsplash.com/photo-1468495244123-6c6c332eeece"
                class="img-fluid"
                alt="Electronics"
              />
              <div class="category-overlay">
                <h3>Electronics</h3>
                <p>Latest gadgets and electronics</p>
                <a href="products.html#electronics" class="btn btn-light"
                  >Shop Now</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="category-card animate__animated animate__fadeIn">
              <img
                src="https://images.unsplash.com/photo-1572635196237-14b3f281503f"
                class="img-fluid"
                alt="Sunglasses"
              />
              <div class="category-overlay">
                <h3>Sunglasses</h3>
                <p>Trending sunglasses collection</p>
                <a href="products.html#sunglasses" class="btn btn-light"
                  >Shop Now</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="category-card animate__animated animate__fadeIn">
              <img
                src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9"
                class="img-fluid"
                alt="Mobile Phones"
              />
              <div class="category-overlay">
                <h3>Mobile Phones</h3>
                <p>Latest smartphones</p>
                <a href="products.html#phones" class="btn btn-light"
                  >Shop Now</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter py-5 bg-primary text-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h3>Subscribe to Our Newsletter</h3>
            <p>Get the latest updates and special offers</p>
          </div>
          <div class="col-md-6">
            <form class="d-flex">
              <input
                type="email"
                class="form-control me-2"
                placeholder="Enter your email"
              />
              <button class="btn btn-light">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Enhanced Footer -->
    <footer class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>About ShopEase</h5>
            <p>
              Your one-stop destination for all shopping needs. We provide
              quality products at the best prices.
            </p>
            <div class="social-links mt-3">
              <a href="#" class="text-white me-2"
                ><i class="bi bi-facebook"></i
              ></a>
              <a href="#" class="text-white me-2"
                ><i class="bi bi-twitter"></i
              ></a>
              <a href="#" class="text-white me-2"
                ><i class="bi bi-instagram"></i
              ></a>
              <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-md-3">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
              <li><a href="products.html" class="text-white">Products</a></li>
              <li><a href="career.html" class="text-white">Careers</a></li>
              <li><a href="contact.html" class="text-white">Contact Us</a></li>
              <li><a href="#" class="text-white">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Customer Service</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">FAQ</a></li>
              <li><a href="#" class="text-white">Shipping Info</a></li>
              <li><a href="#" class="text-white">Returns</a></li>
              <li><a href="#" class="text-white">Order Status</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Contact Info</h5>
            <ul class="list-unstyled">
              <li><i class="bi bi-geo-alt"></i> 123 Shopping Street, NY</li>
              <li><i class="bi bi-telephone"></i> +1 234 567 890</li>
              <li><i class="bi bi-envelope"></i> info@shopease.com</li>
            </ul>
          </div>
        </div>
        <hr class="my-4" />
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">&copy; 2024 ShopEase. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-end">
            <img
              src="https://via.placeholder.com/50x30"
              alt="Payment Method"
              class="me-2"
            />
            <img
              src="https://via.placeholder.com/50x30"
              alt="Payment Method"
              class="me-2"
            />
            <img src="https://via.placeholder.com/50x30" alt="Payment Method" />
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
