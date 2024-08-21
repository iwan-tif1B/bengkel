<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>XCLUS AUTO CARE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color: black;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="" style="color:#FBB034">XCLUS AUTO CARE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#paket">Paket</a></li>
          <li><a class="nav-link scrollto" href="status">Riwayat Pembelian</a></li>
          <!-- <li><a class="nav-link scrollto" href="pembayaran">Pembayaran</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="antri">Antrian</a></li> -->
          <li><a class="nav-link scrollto" href="#katalog">Katalog</a></li>
          <li><a class="getstarted scrollto" href="/portal">Masuk</a></li>
          @if(auth()->check())
          <li><a class="getstarted scrollto" href="/logout">Logout</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url(assets/img/hm-4.png);height:550px;">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Salon Kendaraan Terbaik Untuk Tampilan Profesional</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Jl. Soekarno - Hatta No.4, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="/buku_tamu" class="btn-get-started scrollto">Booking Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/honda1.jpg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/mitsubishi.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/toyota.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/Chevrolet.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/Mercedes-Benz.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/Ford.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>
          
        </div>

      </div>
    </section><!-- End Clients Section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Putih</title>
    <style>
        #navbar ul li a {
            color: white !important; /* Mengatur warna teks menjadi putih */
        }
    </style>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" style="background-color: #000000;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content" style="color:white;">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              XCLUS Motocare adalah perusahaan jasa pelapisan kendaraan dengan Nano Ceramic yang berdiri sejak tahun 2021,
              perusahaan ini sudah memiliki lebih dari dua cabang yang berada di kota Pekanbaru. XCLUS Motocare memiliki 
              jumlah pelanggan per bulan yakni lima sampai tujuh mobil. XCLUS Motocare berfokus dalam melakukan proteksi 
              kendaraan Anda dan terus mengembangkan produk-produk barunya, seperti : anti karat, wax , car wash shampoo, 
              coating dan masih banyak lagi.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Pesan layanan perawatan mobil dengan mudah melalui platform kami.</li>
              <li><i class="ri-check-double-line"></i> Kami memahami pentingnya kehandalan, dan kami menjamin pekerjaan yang berkualitas tinggi.</li>
              <li><i class="ri-check-double-line"></i> Kami memberi tahu kapan waktunya melakukan maintainance agar kendaraan Anda tetap terawat.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              <h3>Mengapa Memilih Kami?</h3>
              <b>Kemudahan dan Kepastian:</b> Kami menawarkan layanan tanpa repot. Pesan, datang, dan kendaraan Anda akan mendapatkan
              perawatan yang dibutuhkannya.<br>
              <b>Keahlian Terkini:</b> Kami mengikuti perkembangan teknologi terkini untuk memberikan pelayanan yang efisien dan sesuai
              dengan standar terbaru.<br>
              <b>Kualitas Tanpa Kompromi:</b> Hanya bekerja dengan mekanik terbaik untuk memastikan setiap kendaraan yang keluar dari salon
              kami berada dalam kondisi prima.
            </p>
            <!-- <a href="#" class="btn-learn-more">Hubungi Kami</a> -->
          </div>
        </div>

      </div>


    </section><!-- End About Us Section -->
    <!-- ======= Features Section ======= -->
    <section id="paket" class="features" style="background-color: #000000;">
      <div class="container">
    
        <div class="section-title" data-aos="fade-up">
          <h2>Paket Mobil</h2>
          <p>Paket yang kami sediakan untuk anda</p>
        </div>


    <div style="display: flex;">
         <div class="container" data-aos="fade-up" data-aos-delay="300">
            @foreach($bukuTamus as $bukuTamu)
            @if($bukuTamu->kategori === 'Mobil')
            <div class="row">
                <div class="col-lg-6 col-md-4 mb-2">
                  <div class="icon-box" style="background-color:#FBB034">
                      <i class="ri-gradienter-line" style="color: #ffbb2c;"></i>
                      <h3 class="mt-3"><a href="{{ url('/page7/' . $bukuTamu->id) }}">{{ $bukuTamu->nama }}</a>
                      <p class="description">{{ $bukuTamu->harga }}</p>
                      </h3>
                  </div>
              </div>
            </div>
            @endif
            @endforeach
            
          </div>
        <div style="height:100%; width:100%;">
        <img src="assets/images/motor1.png" class="img-fluid" alt="">
        </div>
    </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="paket" class="features" style="background-color: #000000;">
      <div class="container">
    
        <div class="section-title" data-aos="fade-up">
          <h2>Paket Motor</h2>
          <p>Paket yang kami sediakan untuk anda</p>
        </div>


    <div style="display: flex;">
    <div style="height:100%; width:100%;">
        <img src="assets/img/size.png" class="img-fluid" alt="">
        </div>
         <div class="container" data-aos="fade-up" data-aos-delay="300">
            @foreach($bukuTamus as $bukuTamu)
            @if($bukuTamu->kategori === 'Motor')
            <div class="row">
                <div class="col-lg-6 col-md-4 mb-2">
                  <div class="icon-box" style="background-color:#FBB034">
                      <i class="ri-gradienter-line" style="color: #ffbb2c;"></i>
                      <h3 class="mt-3"><a href="{{ url('/page7/' . $bukuTamu->id) }}">{{ $bukuTamu->nama }}</a>
                      <p class="description">{{ $bukuTamu->harga }}</p>
                      </h3>
                  </div>
              </div>
            </div>
            @endif
            @endforeach
            
          </div>
    </div>
      </div>
    </section><!-- End Features Section -->

    <section id="katalog" class="team section-bg" style="background-color: #000000;">
      <div class="container">
    
        <div class="section-title" data-aos="fade-up">
          <h2>Katalog</h2>
          <p>FRANCHISE</p>
        </div>
    
        <div class="row">
        @foreach($katalog as $item)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ Storage::url($item->gambar_produk) }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$item->nama}}</h4>
                <p>{{$item->harga}}</p>
              </div>
            </div>
          </div>
          @endforeach
    
    
        </div>
    
      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="background-color: #000000;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Layanan Kami</h2>
          <p>Setiap layanan kami penting untuk menjaga performa, keamanan, dan umur pakai kendaraan Anda.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Paint Cleaner</a></h4>
              <p class="description">Suatu treatment yang akan membuat warna kendaraan anda yang sebelumnya kusam akan menjadi kinclong kembali.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">AC Cleaner Refresher</a></h4>
              <p class="description">Treatment ini adalah salah satu yang banyak di minati 
                karena treatment tersebut membuat AC mobil anda menjadi lebih fresh dan tidak ada lagi bau yang tidak sedap.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Undercarriage</a></h4>
              <p class="description">Undercarriage adalah salah satu treatment mencegah terjadinya kropos atau karat di kolong mobil anda.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Waterspot Remover</a></h4>
              <p class="description">Berfungsi sebagai pembersih jamur/kerak air/deposit mineral pada bagian body kendaraan, 
                emblem, mesin, plastik, karet, logam dll.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>XCLUS Motocare</strong>
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div style="width:50px;height:50px;position:fixed;left:20px;bottom:20px;">
    <a href="https://wa.me/+6281267476807"><img src="assets/img/whatsapp.png" alt="" style="width:50px;height:50px"></a>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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