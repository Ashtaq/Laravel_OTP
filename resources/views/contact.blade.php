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
    <link href="contact.css" rel="stylesheet" />
  </head>
  <body>
    @include('components.navigation')
    @include('components.navbar')
    @include('components.header')

    
    <div class="hero-section">
      <h1>Contact Us</h1>
      <p>We'd love to hear from you</p>
    </div>

    <div class="contact-container">
      <div class="contact-form">
        <h2>Send us a message</h2>
        <form action="#" method="POST">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" />
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <button type="submit" class="submit-btn">Send Message</button>
        </form>
      </div>

      <div class="contact-info">
        <div class="info-item">
          <h3>Our Office</h3>
          <p>123 Business Street</p>
          <p>New York, NY 10001</p>
          <p>United States</p>
        </div>
        <div class="info-item">
          <h3>Contact Details</h3>
          <p>Email: info@company.com</p>
          <p>Phone: +1 (555) 123-4567</p>
          <p>Fax: +1 (555) 123-4568</p>
        </div>
        <div class="info-item">
          <h3>Business Hours</h3>
          <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
          <p>Saturday: 10:00 AM - 2:00 PM</p>
          <p>Sunday: Closed</p>
        </div>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="map-section">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1647043099272!5m2!1sen!2s"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </div>

    <section class="faq-section">
      <h2 class="section-title">Frequently Asked Questions</h2>
      <div class="faq-container">
        <div class="faq-item">
          <h3>What are your response times?</h3>
          <p>We typically respond to all inquiries within 24 business hours.</p>
        </div>
        <div class="faq-item">
          <h3>Do you offer support on weekends?</h3>
          <p>Yes, we offer limited support on Saturdays from 10 AM to 2 PM.</p>
        </div>
        <div class="faq-item">
          <h3>How can I schedule a meeting?</h3>
          <p>
            You can schedule a meeting by filling out the contact form or
            calling us directly.
          </p>
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
