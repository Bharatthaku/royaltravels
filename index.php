<!DOCTYPE html>
<html lang="en">

<head>
  <title>Royal Travels</title>
  <?php include 'links/links.php' ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">RT<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Book Now </a></li>
          <li><a class="nav-link scrollto" href="#">Why Us</a></li>
          <li><a class="nav-link scrollto " href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Call Now</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6"></div>
        <div class="col-xl-6 col-lg-4">
          <div class="banner-form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Pickup Location" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Drop Location" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="date" class="form-control" name="subject" id="subject" placeholder="Pickup date" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Book Now</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-car"></i></div>
              <h4><a href="">Extensive Options</a></h4>
              <p>Wide range of quality,safe & licensed vehicles</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-car"></i></div>
              <h4><a href="">Convenient</a></h4>
              <p>Enjoy a high-quality transfer experience at surprisingly low prices</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-car"></i></div>
              <h4><a href="">Easy & flexible booking</a></h4>
              <p>Booking online is easy and only take 5 minutes, cancellations are free of charge up to 1 hour before the transfer.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-car"></i></div>
              <h4><a href="">24/7 customer service</a></h4>
              <p>24 hours a day, 365 days a year- we’re always here to help you.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 col-sm-12" data-aos="fade-left" data-aos-delay="100">
          <div class="card" data-images="images-1">
    <div class="card__slide">
        <img  src="assets/img/img-1.jpg" alt="image-1" class="images-1" />
    </div>
      <div class="card__slide">
        <img  src="assets/img/img-2.jpg" alt="image-2" class="images-2" />
    </div>
      <div class="card__slide">
        <img  src="assets/img/img-3.jpg" alt="image-3" class="images-3" />
    </div>
 </div>
          </div>
          <div class="col-lg-6 col-sm-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Best One Way Taxi Service in Ahmedabad</h3>
            <p>
              <span>ROYAL TRAVELS</span> is leading outstation taxi provider in India. We strive to make the taxi booking an easy and comfortable experience through our online cab booking service. Our services include One way taxi booking, outstation taxi booking and local taxi booking services
            </p>

            <a class="button1">Book Now</a> <br>
            <a class="button">873004023</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container-c" data-aos="fade-up">

        <div class="row1">
          <div class="pricing" data-aos="fade-right">
            <h1>Our Pricing</h1>
              <div class="toggle">
                <label>Annually </label>
                <div class="toggle-btn">
                  <input type="checkbox" class="checkbox" id="checkbox" />
                  <label class="sub" id="sub" for="checkbox">
                    <div class="circle"></div>
                  </label>
                </div>
                  <label> Monthly</label>
              </div>
          </div>

          <div class="cards">
    <div class="card-1 shadow">
      <ul>
        <li class="pack">Hatchback</li>
        <li id="basic" class="price bottom-bar">&#8377;9/Km</li>
        <li class="bottom-bar">2 Bags</li>
        <li class="bottom-bar">3-4 Persons</li>
        <li class="bottom-bar">Wagon-R or Equivalent</li>
        <li><button class="btn">Book Now</button></li>
      </ul>
    </div>
    <div class="card-1 active">
      <ul>
        <li class="pack">Sedan</li>
        <li id="professional" class="price bottom-bar">&#8377;10/Km</li>
        <li class="bottom-bar">3 Bags</li>
        <li class="bottom-bar">3-4 Persons</li>
        <li class="bottom-bar">Xcent or Equivalent</li>
        <li><button class="btn active-btn">Book Now</button></li>
      </ul>
    </div>
    <div class="card-1 shadow">
      <ul>
        <li class="pack">SUVr</li>
        <li id="master" class="price bottom-bar">&#8377;13/Km</li>
        <li class="bottom-bar">4 Bags</li>
        <li class="bottom-bar">3-4 Persons</li>
        <li class="bottom-bar">Ertiga or Equivalent</li>
        <li><button class="btn">Book Nowe</button></li>
      </ul>
    </div>
  </div>
      
        </div>

      </div>
    </section><!-- End Features Section -->

    

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
      <div class="content d-flex flex-column justify-content-center">
              <h3></h3>
              <div class="row">
                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="fa fa-car"></i>
                    <span data-purecounter-start="0" data-purecounter-end="458" data-purecounter-duration="16" class="purecounter"></span>
                    <p><strong>Completed Rides</strong></p>
                  </div>
                </div>

                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <i class="fas fa-poll-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="16" class="purecounter"></span>
                    <p><strong>Happy Customers</strong></p>
                  </div>
                </div>

                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <i class="fas fa-cars"></i>
                    <span data-purecounter-start="0" data-purecounter-end="53" data-purecounter-duration="12" class="purecounter"></span>
                    <p><strong>AC Fleets</strong></p>
                  </div>
                </div>

                <div class="col-md-3 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <i class="fas fa-graduation-cap"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="10" class="purecounter"></span>
                    <p><strong>Experienced Chauffeurs</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
        <div class="row no-gutters">
          <div class="col-xl-10 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

      <div class="section-title">
          <h2>Checkout Our Popular Routes</h2>
        </div>
        <div class="row routes">
          <div class="col-md-3 route">
            <a href="http://">Ahmedabad to Mumbai</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Surat</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Pune</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Rajkot</a>
          </div>
        </div>

        <div class="row routes">
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
        </div>

        <div class="row routes">
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
          <div class="col-md-3 route">
          <a href="http://">Ahmedabad to Mumbai</a>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29745.802313384527!2d72.9403825395508!3d21.262548000000027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0469cd34956cb%3A0x74d41f8dfad77c10!2sROYAL%20TOURS%20%26%20TRAVELS!5e0!3m2!1sen!2sin!4v1649482956626!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-6">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kamrej Char Rasta, Varachha road, Di. Surat,Gujarat</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>royalcab000@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 9081 1110 40</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="message" placeholder="Message" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>RT<span>.</span></h3>
              <p>
                Kamrej Char Rasta, Varachha road,<br>
                Di. Surat,Gujarat<br><br>
                <strong>Phone:</strong> +19 9081 1110 40<br>
                <strong>Email:</strong> royalcab000@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Book Now</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Why Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">One Way Cab</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Out Station Cab</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Airport Basis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Local City Cab</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gujarat Tourism</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Royal Travels</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="#">Hasten Global Pvt.</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>