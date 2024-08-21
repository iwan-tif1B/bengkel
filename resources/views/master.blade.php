<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>XCLUS MOTOCARE</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('asset/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('asset/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('asset/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('asset/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('asset/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('asset/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="width:100%">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="/portal" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('asset/images/logomini.png')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="/portal">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel" style="width:100%">
        <div class="content-wrapper">
          <div class="row">
            @yield('content')
      </div>
    </div>   
  </div>
</div>
</div>
</div>
   <footer class="footer">
    <div class="d-sm-flex justify-content-center">
      <span class="text-muted text-center text-sm-center d-block d-sm-inline-block">Copyright © 2021</span>
    </div>
  </footer> 
</div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('asset/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('asset/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('asset/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('asset/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('asset/js/off-canvas.js')}}"></script>
  <script src="{{asset('asset/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('asset/js/template.js')}}"></script>
  <script src="{{asset('asset/js/settings.js')}}"></script>
  <script src="{{asset('asset/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('asset/js/dashboard.js')}}"></script>
  <script src="{{asset('asset/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
   <!-- sweetalert -->
<script src="{{ asset('asset/js/sweetalert2@11.js') }}"></script>
</body>

</html>

