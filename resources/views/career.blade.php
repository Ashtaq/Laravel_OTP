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
    <link href="career.css" rel="stylesheet" />
  </head>
  <body>

    @include('components.navigation')
    @include('components.navbar')
    @include('components.header')

    <div class="hero-section">
      <h1>Join Our Team</h1>
      <p>Build your career with us and make a difference</p>
    </div>

    <section class="about-section">
      <div class="about-content">
        <h2 class="section-title">About Us</h2>
        <p>
          We are a dynamic and innovative company committed to creating
          cutting-edge solutions that transform industries. Our team consists of
          passionate individuals who thrive on challenges and continuous
          learning. We believe in fostering a collaborative environment where
          creativity and innovation flourish.
        </p>
      </div>
    </section>

    <section class="jobs-section">
      <h2 class="section-title" style="text-align: center">Open Positions</h2>
      <div class="jobs-container">
        <div class="job-card">
          <h3>Senior Software Engineer</h3>
          <p>Full-time • Remote</p>
          <p>
            We're looking for an experienced software engineer to join our core
            development team.
          </p>
          <button class="apply-btn">Apply Now</button>
        </div>

        <div class="job-card">
          <h3>UX/UI Designer</h3>
          <p>Full-time • Hybrid</p>
          <p>
            Create beautiful and intuitive user experiences for our products.
          </p>
          <button class="apply-btn">Apply Now</button>
        </div>

        <div class="job-card">
          <h3>Product Manager</h3>
          <p>Full-time • On-site</p>
          <p>
            Lead product strategy and development for our flagship products.
          </p>
          <button class="apply-btn">Apply Now</button>
        </div>

        <div class="job-card">
          <h3>Data Scientist</h3>
          <p>Full-time • Remote</p>
          <p>
            Transform data into actionable insights and drive business
            decisions.
          </p>
          <button class="apply-btn">Apply Now</button>
        </div>

        <div class="job-card">
          <h3>DevOps Engineer</h3>
          <p>Full-time • Remote</p>
          <p>
            Build and maintain our cloud infrastructure and deployment
            pipelines.
          </p>
          <button class="apply-btn">Apply Now</button>
        </div>

        <div class="job-card">
          <h3>Marketing Specialist</h3>
          <p>Full-time • Hybrid</p>
          <p>Drive our marketing initiatives and grow our brand presence.</p>
          <button class="apply-btn">Apply Now</button>
        </div>
      </div>
    </section>

    <section class="benefits-section">
      <h2 class="section-title" style="color: white">Why Join Us?</h2>
      <div class="benefits-grid">
        <div class="benefit-item">
          <h3>Competitive Salary</h3>
          <p>We offer industry-leading compensation packages</p>
        </div>
        <div class="benefit-item">
          <h3>Health Benefits</h3>
          <p>Comprehensive health, dental, and vision coverage</p>
        </div>
        <div class="benefit-item">
          <h3>Work-Life Balance</h3>
          <p>Flexible working hours and remote options</p>
        </div>
        <div class="benefit-item">
          <h3>Growth Opportunities</h3>
          <p>Continuous learning and career development</p>
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
