        <!-- Enhanced Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
              <a class="navbar-brand animate__animated animate__fadeIn" href="index.html">
                <i class="bi bi-shop text-primary"></i> ShopEase
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/index') }}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Categories</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="products.html#electronics">Electronics</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="products.html#sunglasses">Sunglasses</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="products.html#phones">Mobile Phones</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="{{ url('/products') }}">Products</a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="{{ url('/career') }}">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="{{ url('/contact') }}">Contact</a>
                  </li>
                </ul>
                <div class="d-flex align-items-center">
                  <a href="#" class="btn btn-outline-primary me-2"
                  ><i class="bi bi-search"></i
                  ></a>
                  <a href="#" class="btn btn-outline-primary me-2"
                    ><i class="bi bi-heart"></i
                  ></a>
                  <a href="#" class="btn btn-primary position-relative">
                    <i class="bi bi-cart3"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      3
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </nav>