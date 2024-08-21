<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>XCLUS AUTO CARE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body style="background-color: black;">

    <header style="margin-left: 2%; margin-top: 2%;">
        <a href="/home" style="color:#FBB034"><img src="{{ asset('assets/img/back_button.png') }}"></a>
    </header>

    <main>
        <div class="container">
            <div class="article" style="display: flex; flex-direction: row; margin-left: -8%; margin-top: -8%;">
                <div class="left-side" style="margin-top: 10%;">
                    @isset($kategori)
                        <h3 style="color: white;">{{ $kategori->nama }}</h3>
                        <div class="isi-package" style="color: white;">
                            <ul style="text-align: justify;">
                                <?php
                                $deskripsi = $kategori->desk;
                                $deskripsiArray = explode("\n", $deskripsi);
                                foreach ($deskripsiArray as $item) {
                                    echo "<li>$item</li>";
                                }
                                ?>
                            </ul>
                        </div>

                    @else
                        <h3 style="color: white;">No Category Selected</h3>
                        <div class="isi-package" style="color: white;">
                            <p>Select a category to see details.</p>
                        </div>
                    @endisset
                </div>
                <div class="right-side" style="margin-top: 10%; margin-left: 3%;">
                    <img src="{{ asset('assets/img/VIP.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </main>
    
    <footer></footer>
</body>

</html>
