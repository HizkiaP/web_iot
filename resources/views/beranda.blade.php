<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Deteksi - Monstera Adansonii</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logomonstera2.png" rel="icon" />
  <link href="assets/img/logomonstera2.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Impact/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Impact/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Impact/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Impact/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Impact/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center" style="background-image: linear-gradient(245.59deg,#4d9559,#38703d,#133917)">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        {{-- <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i> --}}
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{route('beranda')}}" class="home"><i class="bi bi-house-door"></i></a>
        {{-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> --}}
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center" style="background-image: linear-gradient(245.59deg,#4d9559,#38703d,#133917)">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{route('beranda')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Sistem<span>Deteksi</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('beranda')}}">Beranda</a></li>
          <li><a href="{{route('data-sensor')}}">Data Sensor</a></li>
          {{-- <li><a href="{{route('grafik')}}">Grafik Sensor</a></li> --}}
          <li><a href="{{route('hasil')}}">Hasil</a></li>
          {{-- <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul> --}}
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" style="background-image: linear-gradient(245.59deg,#4d9559,#38703d,#133917)">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Kualitas Tanah <span>Tanaman Janda Bolong</span></h2>
          
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#sensor" class="btn-get-started">Mulai</a>
           
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" style="display: flex; align-items: center; justify-content: center; position: relative;">
          <img src="images/jandabolong.png" class="img-fluid floating-image" alt="" data-aos="zoom-out" data-aos-delay="100" style="position: relative; z-index: 1;">
          <span class="svg-container">
            <svg class="rotating-svg" width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path 
              fill="#DCE35B" d="M55.3,-34.9C63.3,-18.1,55.6,4.8,43.8,25.8C32,46.8,16,65.8,-5.3,68.9C-26.5,71.9,
              -53,58.9,-66.1,37.2C-79.2,15.5,-78.9,-14.9,-65.6,-34.8C-52.4,-54.6,-26.2,-63.8,-1.3,-63.1C23.7,
              -62.4,47.4,-51.7,55.3,-34.9Z" transform="translate(100 100)" />
            </svg>

          </span>
        </div>
        <style>
          .img-fluid {
          max-width: 775px; 
          max-height: 375px;
          }

          .floating-image {
          animation: floatAnimation 3s ease-in-out infinite;
          }

          .svg-container {
          position: absolute;
          top: 50%;
          left: 55%;
          transform: translate(-50%, -50%);
          z-index: 0;
          }
  
          .rotating-svg {
          animation: rotateAnimation 5s infinite;
          }

          @keyframes floatAnimation {
          0% {
          transform: translate(0, 0);
          }
          50% {
          transform: translate(0, 20px);
          }
          100% {
          transform: translate(0, 0);
          }
          }

          @keyframes rotateAnimation {
            from {
            transform: rotate(0deg);
          }
            to {
            transform: rotate(360deg);
          }
        }
        </style>

      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
          
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box" style="background-color: #38703d">
              <div class="icon"><i class="bi bi-thermometer-sun"></i>
                {{-- <span class="temp" style="font-size: 35px;">{{$datasensor->nilai_temp}} °C</span> --}}
              </div>
              <h4 class="title"><a href="{{route('data-sensor')}}" class="stretched-link">Suhu Udara</a></h4>
            </div>
          </div><!--End Icon Box Suhu Udara -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box" style="background-color: #38703d">
              <div class="icon"><i class="bi bi-thermometer-high"></i>
                {{-- <span class="soil-temp" style="font-size: 35px;">{{$datasensor->nilai_suhu_tanah}} °C</span> --}}
              </div>
              <h4 class="title"><a href="{{route('data-sensor')}}" class="stretched-link">Suhu Tanah</a></h4>
            </div>
          </div><!--End Icon Box Suhu Tanah -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="background-color: #38703d">
              <div class="icon"><i class="bi bi-snow2"></i>
                {{-- <span class="ph" style="font-size: 35px;">{{$datasensor->nilai_ph}}</span> --}}
              </div>
              <h4 class="title"><a href="{{route('data-sensor')}}" class="stretched-link">pH Tanah</a></h4>
            </div>
          </div><!--End Icon Box pH Tanah -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box" style="background-color: #38703d">
              <div class="icon"><i class="bi bi-droplet-fill"></i>
                {{-- <span class="humidity" style="font-size: 35px;">{{$datasensor->nilai_kelembaban}} %</span> --}}
              </div>
              <h4 class="title"><a href="{{route('data-sensor')}}" class="stretched-link">Kelembaban</a></h4>
            </div>
          </div><!--End Icon Box Kelembaban -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="sensor" class="sensor">
      
    </section><!-- End About Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="background-image: linear-gradient(245.59deg,#4d9559,#38703d,#133917)">

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Hizkia Panjaitan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Impact/assets/vendor/aos/aos.js"></script>
  <script src="Impact/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Impact/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Impact/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Impact/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Impact/assets/js/main.js"></script>

</body>

</html>