@php
    $service = get_service();

    $site_name = get_setting_value('_site_name');
    $ppid = get_setting_value('_ppid');
    $location = get_setting_value('_location');
    $jam_kerja = get_setting_value('_jam_kerja');

    $email = get_setting_value('_email');
    $twitter = get_setting_value('_twitter');
    $facebook = get_setting_value('_facebook');
    $instagram = get_setting_value('_instagram');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul')- {{ $site_name }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/tema/img/logo-diskan.png') }}" rel="icon">
  <link href="{{ asset('/tema/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/tema/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tema/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('/tema/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tema/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/tema/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tema/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tema/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/tema/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/tema/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="index.html">{{ $site_name }}</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('/tema/img/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link home" href="{{ url('/') }}">Beranda</a></li>
          <li class="dropdown"><a class="nav-link" href="{{ url('/profil') }}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/profil') }}">Sejarah</a></li>
              <li><a href="{{ url('/profil/visi-misi') }}">Visi dan Misi</a></li>
              <li><a href="{{ url('/profil/struktur-organisasi') }}">Struktur Organisasi</a></li>
              <li><a href="{{ url('/profil/tugas-fungsi') }}">Tugas Pokok dan Fungsi</a></li>
            </ul>
          <li><a class="nav-link" href="{{ url('/berita') }}">Berita</a></li>
          <li class="dropdown"><a class="nav-link" href="{{ url('/layanan') }}"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach($service as $services)
                <li><a href="{{ route('layanan.show', $services->id) }}">{{ $services->title }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a class="nav-link" href="{{ url('/galeri') }}">Galeri</a></li>
          <li><a class="nav-link" href="{{ $ppid }}">PPID</a></li>
          <li class="dropdown"><a class="nav-link" href="{{ url('/informasi') }}"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/informasi') }}">Pengumuman</a></li>
              <li><a href="https://www.lapor.go.id/">Pengaduan Masyarakat</a></li>
            </ul>
          </li>
          <li><a class="getstarted" href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

@yield('hero')

  <main id="main">

@yield('main')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="font-size: 22px">{{ $site_name }}</h3>
            <p>
              {{ $location }}
              <br><br>
              <strong>Instagram:</strong> @diskankabbekasi <br>
              <strong>Email:</strong> {{ $email }} <br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Informasi</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p><br>
                <div class="footer-contacts">
                  <p><strong>Tel:</strong> +123 456 789</p>
                  <p><strong>Working Hours:</strong> {{ $jam_kerja }}</p>
                </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              @if ($twitter)
                <a href="{{ $twitter }}" target="blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              @endif

              @if ($facebook)
                  <a href="{{ $facebook }}" target="blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              @endif
              
              @if ($instagram)
                  <a href="{{ $instagram }}" target="blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              @endif
              
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ $site_name }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">egaaips</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/tema/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/tema/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/tema/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/tema/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/tema/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/tema/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/tema/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/tema/js/main.js') }}"></script>
  

</body>

</html>