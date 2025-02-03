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

    <!-- Products Section -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-4 animate__animated animate__fadeInDown">
          Our Products
        </h2>

        <!-- Category Pills -->
        <div class="d-flex justify-content-center mb-4">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#" data-category="all"
                >All Products</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-category="electronics"
                >Electronics</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-category="sunglasses"
                >Sunglasses</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-category="phones"
                >Mobile Phones</a
              >
            </li>
          </ul>
        </div>

        <div class="row">
          <!-- Product Filters -->
          <div class="col-md-3">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Filters</h5>
                <div class="mb-3">
                  <label class="form-label">Price Range</label>
                  <div class="d-flex align-items-center">
                    <span>$0</span>
                    <input
                      type="range"
                      class="form-range mx-2"
                      id="priceRange"
                      min="0"
                      max="2000"
                    />
                    <span>$2000</span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Brand</label>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="samsung"
                    />
                    <label class="form-check-label">Samsung</label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="apple"
                    />
                    <label class="form-check-label">Apple</label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="rayban"
                    />
                    <label class="form-check-label">Ray-Ban</label>
                  </div>
                </div>
                <button class="btn btn-primary w-100">Apply Filters</button>
              </div>
            </div>
          </div>

          <!-- Product Grid -->
          <div class="col-md-9">
            <div class="row">
              <!-- Electronics Products -->
              <div class="col-md-4 mb-4" data-category="electronics">
                <div
                  class="card product-card animate__animated animate__fadeIn"
                >
                  <img
                    src="https://images.unsplash.com/photo-1587829741301-dc798b83add3"
                    class="card-img-top"
                    alt="Wireless Headphones"
                  />
                  <div class="card-body">
                    <div class="badge bg-primary mb-2">Electronics</div>
                    <h5 class="card-title">Wireless Headphones</h5>
                    <p class="card-text">Premium noise-canceling headphones</p>
                    <p class="text-primary fw-bold">$199.99</p>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                  </div>
                </div>
              </div>

              <!-- Sunglasses Products -->
              <div class="col-md-4 mb-4" data-category="sunglasses">
                <div
                  class="card product-card animate__animated animate__fadeIn"
                >
                  <img
                    src="https://images.unsplash.com/photo-1572635196237-14b3f281503f"
                    class="card-img-top"
                    alt="Sunglasses"
                  />
                  <div class="card-body">
                    <div class="badge bg-info mb-2">Sunglasses</div>
                    <h5 class="card-title">Classic Aviator</h5>
                    <p class="card-text">Polarized UV protection sunglasses</p>
                    <p class="text-primary fw-bold">$129.99</p>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                  </div>
                </div>
              </div>

              <!-- Mobile Phones Products -->
              <div class="col-md-4 mb-4" data-category="phones">
                <div
                  class="card product-card animate__animated animate__fadeIn"
                >
                  <img
                    src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9"
                    class="card-img-top"
                    alt="Smartphone"
                  />
                  <div class="card-body">
                    <div class="badge bg-success mb-2">Mobile Phones</div>
                    <h5 class="card-title">Galaxy S22</h5>
                    <p class="card-text">Latest flagship smartphone</p>
                    <p class="text-primary fw-bold">$899.99</p>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                  </div>
                </div>
              </div>

              <!-- More Products -->
              <div class="col-md-4 mb-4" data-category="electronics">
                <div
                  class="card product-card animate__animated animate__fadeIn"
                >
                  <img
                    src="https://images.unsplash.com/photo-1546868871-7041f2a55e12"
                    class="card-img-top"
                    alt="Smart Watch"
                  />
                  <div class="card-body">
                    <div class="badge bg-primary mb-2">Electronics</div>
                    <h5 class="card-title">Smart Watch Pro</h5>
                    <p class="card-text">Fitness and health tracking</p>
                    <p class="text-primary fw-bold">$299.99</p>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4" data-category="sunglasses">
                <div
                  class="card product-card animate__animated animate__fadeIn"
                >
                  <img
                    src="https://images.unsplash.com/photo-1577803645773-f96470509666"
                    class="card-img-top"
                    alt="Sport Sunglasses"
                  />
                  <div class="card-body">
                    <div class="badge bg-info mb-2">Sunglasses</div>
                    <h5 class="card-title">Sport Sunglasses</h5>
                    <p class="card-text">Perfect for outdoor activities</p>
                    <p class="text-primary fw-bold">$89.99</p>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4" data-category="phones">
                <div
                  class="card product-card animate__animated animate__fadeIn"
                >
                  <img
                    src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd"
                    class="card-img-top"
                    alt="iPhone"
                  />
                  <div class="card-body">
                    <div class="badge bg-success mb-2">Mobile Phones</div>
                    <h5 class="card-title">iPhone 13 Pro</h5>
                    <p class="card-text">Pro camera system</p>
                    <p class="text-primary fw-bold">$999.99</p>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-4">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
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
