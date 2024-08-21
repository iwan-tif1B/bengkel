<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>XCLUS AUTO CARE</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/vendor/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  <style>
    .background {
        background-image: url('{{ asset('assets/img/alphard.png') }}');
        /* tambahkan properti CSS lainnya di sini */
    }
</style>
</head>

<body style="background-color: black;">
<header style="margin-left: 2%; margin-top: 2%;">
        <a href="/home" style="color:#FBB034"><img src="assets/img/back_button.png"></a>
    </header>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper background">
      <div class="">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left  px-4 px-sm-5" style="height:850px;margin-left:500px;margin-right:-590px;background-color:black;">
              <center>
              <div class="brand-logo" style="padding-top:200px">
                <img src="{{asset('assets/images/logoxclus.png')}}" width="30%" class="h4 text-gray-900 mb-4">
                </div>
                <h4>XCLUS Auto Care</h4>
                <h6 class="font-weight-light">Masuk untuk melanjutkan</h6>
                </center>
                @if(session('error'))
                    <div class="alert alert-danger mt-6" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form class="pt-3" action="/postlogin" method="post">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password"  placeholder="Masukkan Password" required>
                </div>
                <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Remember Me
                    </label>
                </div> -->
                <div class="mt-3">
                  <button type="submit"  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
                </div>
                <div class="form-check">
                   <label class="form-check-label text-muted">
                  <input type="checkbox" class="form-check-input">
                  Belum ada akun? <a href="{{ route('register') }}">Register Disini</a>
                  </label>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/js/template.js')}}"></script>
  <script src="{{asset('assets/js/settings.js')}}"></script>
  <script src="{{asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
