<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bluezie Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("/frontend/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("/frontend/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("/frontend/assets/vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("/frontend/assets/css/style.css") }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 05 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url("index.html") }}">BlueSpa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{ url("index.html") }}" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url("#hero") }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#about") }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#services") }}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#portfolio") }}">Gallery</a></li>
          
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Log In</a></li>
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>AKTIFITAS SAAT ME TIME!</h1>
          <h2>Hair Removal &; Peremajaan Kulit Instan dengan teknologi keunggulan dan untuk konsultasi GRATIS Anda yang menyenangkan</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ url("#about") }}" class="btn-get-started scrollto">Get Started</a>
            <a href="https://youtu.be/xsnCYCEbdr4?si=x2a9VMKvmysvgFP4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset("/frontend/assets/img/Logspa.png") }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About BLUESPA</h2>
        </div>

        <div class="row content">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset("/frontend/assets/img/urut2.jpg") }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <p>
              Salon kami didukung dan terinspirasi oleh para profesional terkemuka dengan pendidikan dan pelatihan berkelanjutan. Kelas, seminar, dan peragaan busana dilakukan untuk mengikuti gaya dan tren saat ini. Lini produk basah Kenra tersedia untuk ritel seperti halnya Nioxin.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    
    <!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
   <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Dicuci dan dikondisikan diikuti dengan masker perbaikan minyak pohon teh 5 menit dan diakhiri dengan serum perawatan terapi kulit kepala Nioxin yang menyegarkan. Anda belum merasa kulit kepala Anda segar sampai Anda mencoba perawatan ini. </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="{{ url("") }}">Lulur Tubuh Sentuhan Halus</a></h4>
              <p>Perpaduan sempurna gula merah yang mengandung asam alfa hidroksil ini akan membantu meratakan warna kulit dan memungkinkan pengelupasan kulit yang lembut.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="{{ url("") }}">Bungkus Lumpur Rumput Laut</a></h4>
              <p>campuran stimulasi dan detoksifikasi dari French Green Clay dan tanah liat Laut pilihan menghasilkan kulit yang segar dan diperbarui!</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="{{ url("") }}">Sentuh Rumput Laut Bungkus Lumpur Sedona</a></h4>
              <p>Formula antioksidan dan anti-penuaan yang efektif yang membersihkan racun, membuat kulit lembut dan diremajakan. </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="{{ url("") }}">Safir Garam Cahaya</a></h4>
              <p>Garam spa kelas profesional kami membuat kulit Anda terkelupas dan dipoles dengan indah.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Jika, karena alasan apa pun, Anda tidak menyukai rambut Anda atau layanan lainnya, beri tahu penata gaya/ahli kecantikan Anda agar kami dapat memperbaikinya. Kepuasan dan pengalaman Anda sangat penting bagi kami.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-1.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ url("assets/img/portfolio/photo-1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-2.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{ url("assets/img/portfolio/photo-2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-3.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="{{ url("assets/img/portfolio/photo-3.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-4.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{ url("assets/img/portfolio/photo-4.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-5.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="{{ url("assets/img/portfolio/photo-5.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-6.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="{{ url("assets/img/portfolio/photo-6.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-7.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{ url("assets/img/portfolio/photo-7.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-8.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="{{ url("assets/img/portfolio/photo-8.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ asset("/frontend/assets/img/portfolio/photo-9.jpg") }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{ url("assets/img/portfolio/photo-2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="{{ url("portfolio-details.html") }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
   <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>let's go Join!</h4>
            <p>Ditunggu yhhh</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BLUESPA</h3>
            <p>
              A108 Cempaka <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +62 5589 55488 55<br>
              <strong>Email:</strong> bluespa@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Sign Up</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Silky Touch Body Scrub</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Seaweed Mud Wrap</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Lotus Touch Seaweed Wrap Sedona Mud Wrap</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("#") }}">Sapphire Salt Glow</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="{{ url("#") }}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ url("#") }}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ url("#") }}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ url("#") }}" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="{{ url("#") }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BlueSpa</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BLUESPA</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("/frontend/assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/waypoints/noframework.waypoints.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("/frontend/assets/js/main.js") }}"></script>

</body>

</html>