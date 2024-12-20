<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Firdaus - Menjual Buah dan Sayuran</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/user/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/user/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{ asset('assets/user/https://fonts.googleapis.com') }}" rel="preconnect">
  <link href="{{ asset('assets/user/https://fonts.gstatic.com" rel="preconnect') }}" crossorigin>
  <link href="{{ asset('assets/user/https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="{{ asset('assets/user/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('pengunjung.beranda') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/user/img/logo.png') }}" alt="logo" width="100%"> 
        <h1 class="sitename">Firdaus</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('pengunjung.beranda') }}" class="active">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('pengunjung.produkBuah') }}">Buah</a></li>
              <li><a href="{{ route('pengunjung.produkSayur') }}">Sayur</a></li>
              <li><a href="{{ route('pengunjung.informasiPembayaran') }}">Informasi Pembayaran</a></li>
            </ul>
          <li><a href="{{ route('pengunjung.kontak') }}">Kontak</a></li>
          <li><a href="{{ route('pengunjung.tentang') }}">Tentang</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
          </div>
          <div class="col-lg-4 mt-5 order-lg-12">
            <h1 class="mt-5"data-aos="fade-up" style="font-size: 30px; font-weight: bold;">
              Menjual Buah dan Sayur
            </h1>
            <h6 class="mt-2" data-aos="fade-up" style="font-size: 25px;">
              Produk Berkualitas
            </h6>
            <p class="mt-5" data-aos="fade-up" style="color: #1A5F3C;">
              <a href="{{ route('pengunjung.produkBuah') }}">Dapatkan Produknya Disini!</a>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Teks di Kolom Kiri -->
          <div class="col-md-6">
            <div class="post-content" data-aos="fade-up" data-aos-delay="100">
              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h6>Selamat Datang,</h6>
                <h2 style="font-weight: bold;">Profil Singkat Tentang Usaha Firdaus</h2>
                <p>Firdaus adalah sebuah Toko yang menjual aneka buah dan sayur, dimana usaha ini baru merintis selama 3 bulan. 
                  Pemilik usaha ini bernama Firdaus, sesuai dengan nama usaha yang ia buat.</p>
                </div> 
                <div class="mt-1">
                  <p><a href="{{ route('pengunjung.tentang') }}" class="btn-get-started">Profil Lengkap</a></p>
              </div>   
            </div>
          </div>
          <!-- Gambar di Kolom Kanan -->
          <div class="col-md-6">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <!-- Elemen tambahan untuk kotak hijau di belakang gambar -->
              <div class="image-background"></div>
              <a href="{{ route('pengunjung.tentang') }}" class="thumb d-block"><img src="{{ asset('assets/user/img/foto-usaha.png') }}" alt="Image" class="img-fluid rounded"></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pricing" class="pricing">
      <!-- Section Title -->
      <div class="container">
        <h2 class="text-center font-weight-bold">Top Produk</h2>
      </div>

      <div class="container mt-5">
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach ($topProduk->chunk(4) as $chunk) <!-- Bagi produk menjadi grup 4 -->
              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="row gy-4">
                  @foreach ($chunk as $produk)
                    <div class="col-lg-3 col-md-6">
                      <a href="https://api.whatsapp.com/send?phone=6282285875473&text=Halo%2Caku%20ingin%20menanyakan%20produk {{ $produk->nama_produk }}" class="card-link">
                        <div class="pricing-item text-center">
                          <img src="{{ asset('images/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="card-img">
                          <h3>{{ $produk->nama_produk }}</h3>
                        </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            @endforeach
          </div>

          <!-- Carousel Controls -->
          <button class="carousel-control-prev custom-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next custom-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="btn-wrap mt-5 text-center">
          <a href="{{ route('pengunjung.produkBuah') }}" class="btn-selengkapnya">Selengkapnya</a>
        </div>
      </div>
    </section>


    <footer id="footer" class="footer">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
            <div class="widget">
              <a href="{{ route('pengunjung.beranda') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/user/img/logo.png') }}" alt="logo"> 
                <h1 class="footer-name">Firdaus</h1>
              </a>
              <p class="mb-4">
                Firdaus adalah sebuah Toko yang menjual aneka buah dan sayur, dimana usaha ini baru merintis selama 3 bulan. Pemilik usaha ini bernama Firdaus, sesuai dengan nama usaha yang ia buat.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
            <div class="widget">
              <h3 class="widget-heading">Menu</h3>
              <ul class="list-unstyled float-start me-3">
                <li><a href="{{ route('pengunjung.beranda') }}">Beranda</a></li>
                <li><a href="{{ route('pengunjung.produkBuah') }}">Buah</a></li>
                <li><a href="{{ route('pengunjung.produkSayur') }}">Sayur</a></li>
              </ul>
              <ul class="list-unstyled float-start">
                <li><a href="{{ route('pengunjung.informasiPembayaran') }}">Informasi Pembayaran</a></li>
                <li><a href="{{ route('pengunjung.tentang') }}">Tentang</a></li>
                <li><a href="{{ route('pengunjung.kontak') }}">Kontak</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 pl-lg-5">
            <div class="widget">
              <h3 class="widget-heading">Media Sosial</h3>
              <ul class="list-unstyled social-icons light mb-3">
                <li>
                  <a href="https://www.instagram.com/flavatopia_"><span class="bi bi-instagram"></span></a>
                </li>
                <li>
                  <a href="https://api.whatsapp.com/send?phone=6282285875473&text=Halo%2Caku%20ingin%20menanyakan%20prihal%20transaksi"><span class="bi bi-whatsapp"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
          <p>© <span>Copyright 2024 </span> <strong class="px-1 sitename">Flavatopia.</strong> </p>
        </div>
      </div>
    </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <img src="{{ asset('assets/user/img/logo.png') }}" alt="Logo" class="preloader-logo" />
  </div>


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/user/js/main.js') }}"></script>

</body>

</html>