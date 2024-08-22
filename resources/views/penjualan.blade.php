<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Penjualan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link href="https://unpkg.com/tabulator-tables@6.2.5/dist/css/tabulator.min.css" rel="stylesheet">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img
                        src="{{ asset('assets/images/logoxclus.png') }}" class="mr-2" alt="logo"
                        width="100%" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="/portal" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('assets/images/logomini.png') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="/portal">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ 'dashboard' }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Penjualan</span>
                        </a>
                    </li>
                    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                        <ul class="nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ 'dashboard' }}">
                                    <i class="icon-grid menu-icon"></i>
                                    <span class="menu-title">Kembali</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Penjualan</h4>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <form action="{{ route('penjualan.index') }}" method="GET"
                                                class="mb-4">
                                                <div class="form-row">
                                                    <div class="col-lg-3">
                                                        <label for="start_date" class="text-black">Tanggal
                                                            Mulai:</label>
                                                        <input type="date" name="start_date" id="start_date"
                                                            class="form-control" value="{{ request('start_date') }}">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="end_date" class="text-black">Tanggal Akhir:</label>
                                                        <input type="date" name="end_date" id="end_date"
                                                            class="form-control" value="{{ request('end_date') }}">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="paket_salon">Jenis Paket</label>
                                                        <select id="paket_salon" name="paket_salon"
                                                            class="form-control">
                                                            <option value="Mobil"
                                                                {{ request('paket_salon') == 'Mobil' ? 'selected' : '' }}>
                                                                Paket Salon Mobil</option>
                                                            <option value="Motor"
                                                                {{ request('paket_salon') == 'Motor' ? 'selected' : '' }}>
                                                                Paket Salon Motor</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 align-self-end">
                                                        <button type="submit" class="btn btn-primary mt-2"> <i
                                                                class="fa-solid fa-file-pdf"></i>Filter</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="col-lg-2">&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('generate.invoice_all') }}"
                                                class="btn btn-primary mt-4 ml-5">Download PDF</a>
                                        </div>

                                    </div>
                                    {{-- <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>No HP</th>
                                                    <th>Tipe Kendaraan</th>
                                                    <th>Tipe Paket</th>
                                                    <th>Nama Paket</th>
                                                    <th>Harga Paket</th>
                                                    <th>Katalog</th>
                                                    <th>Harga Katalog</th>
                                                    <th>Tanggal</th>
                                                    <th>Gambar</th>
                                                    <th>Bukti TF</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bukuTamus as $bukuTamu)
                                                    <tr>
                                                        <td>{{ $bukuTamu->user->email }}</td>
                                                        <td>{{ $bukuTamu->alamat }}</td>
                                                        <td>{{ $bukuTamu->no_hp }}</td>
                                                        <td>{{ $bukuTamu->tipe_mobil }}</td>
                                                        <td>{{ $bukuTamu->tipe_motor }}</td>
                                                        <td>{{ $bukuTamu->kategori->nama }}</td>
                                                        <td>Rp. {{ number_format($bukuTamu->kategori->harga, 0) }}</td>
                                                        <td>{{ $bukuTamu->katalogs->nama }}</td>
                                                        <td>Rp. {{ number_format($bukuTamu->katalogs->harga, 0) }}
                                                        </td>
                                                        <td>{{ $bukuTamu->tanggal }}</td>
                                                        <td>
                                                            @if ($bukuTamu->gambar)
                                                                <a href="{{ route('lihat_gambar', ['id' => $bukuTamu->id, 'type' => 'gambar']) }}"
                                                                    target="_blank">Lihat Gambar</a>
                                                            @else
                                                                Belum diunggah
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($bukuTamu->Bukti_Tf)
                                                                <a href="{{ route('lihat_gambar', ['id' => $bukuTamu->id, 'type' => 'bukti']) }}"
                                                                    target="_blank">Lihat Bukti TF</a>
                                                            @else
                                                                <a href="/pembayaran"
                                                                    class="text-warning font-weight-bold">Belum
                                                                    dibayar</a>
                                                            @endif
                                                        </td>

                                                        <!-- Modifikasi di sini untuk menampilkan "menunggu konfirmasi" -->
                                                        <td>
                                                            {{ $bukuTamu->status }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="6">Total</td>
                                                    <td>{{ $bukuTamu->kategori->harga++ }}</td>
                                                    <td>&nbsp;</td>
                                                    <td colspan="4">{{ $bukuTamu->katalogs->harga }}</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div> --}}
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>No HP</th>
                                                    <th>Tipe Kendaraan</th>
                                                    <th>Tipe Paket</th>
                                                    <th>Nama Paket</th>
                                                    <th>Harga Paket</th>
                                                    <th>Katalog</th>
                                                    <th>Harga Katalog</th>
                                                    <th>Tanggal</th>
                                                    <th>Gambar</th>
                                                    <th>Bukti TF</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bukuTamus as $bukuTamu)
                                                    <tr>
                                                        <td>{{ $bukuTamu->user->email }}</td>
                                                        <td>{{ $bukuTamu->alamat }}</td>
                                                        <td>{{ $bukuTamu->no_hp }}</td>
                                                        <td>{{ $bukuTamu->tipe_mobil }}</td>
                                                        <td>{{ $bukuTamu->tipe_motor }}</td>
                                                        <td>{{ $bukuTamu->kategori->nama }}</td>
                                                        <td>Rp. {{ number_format($bukuTamu->kategori->harga, 0) }}</td>
                                                        <td>{{ $bukuTamu->katalogs->nama }}</td>
                                                        <td>Rp. {{ number_format($bukuTamu->katalogs->harga, 0) }}</td>
                                                        <td>{{ $bukuTamu->tanggal }}</td>
                                                        <td>
                                                            @if ($bukuTamu->gambar)
                                                                <a href="{{ route('lihat_gambar', ['id' => $bukuTamu->id, 'type' => 'gambar']) }}"
                                                                    target="_blank">Lihat Gambar</a>
                                                            @else
                                                                Belum diunggah
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($bukuTamu->Bukti_Tf)
                                                                <a href="{{ route('lihat_gambar', ['id' => $bukuTamu->id, 'type' => 'bukti']) }}"
                                                                    target="_blank">Lihat Bukti TF</a>
                                                            @else
                                                                <a href="/pembayaran"
                                                                    class="text-warning font-weight-bold">Belum
                                                                    dibayar</a>
                                                            @endif
                                                        </td>
                                                        <td>{{ $bukuTamu->status }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="6">Total</td>
                                                    <td>Rp. {{ number_format($totalHargaPaket, 0) }}</td>
                                                    <td>&nbsp;</td>
                                                    <td>Rp. {{ number_format($totalHargaKatalog, 0) }}</td>
                                                    <td colspan="4"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- main-panel ends -->
                    </div>
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center">
                            <span class="text-center text-sm-center d-block d-sm-inline-block"
                                style="color: black;">Copyright © 2021</span>

                        </div>
                    </footer>
                </div>
            </div>
            <span class="url_data_tamu" data-url="{{ url('/penjualan/create') }}"></span>
            <button type="button" class="btn btn-sm btn-info" onclick="tes()"></button>

            <!-- container-scroller -->

            <!-- plugins:js -->
            <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
            <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
            <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>

            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
            <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('assets/js/template.js') }}"></script>
            <script src="{{ asset('assets/js/settings.js') }}"></script>
            <script src="{{ asset('assets/js/todolist.js') }}"></script>
            <!-- endinject -->
            <!-- Custom js for this page-->
            <script src="{{ asset('assets/js/dashboard.js') }}"></script>
            <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>
            <script type="text/javascript" src="https://unpkg.com/tabulator-tables@6.2.5/dist/js/tabulator.min.js"></script>
            <!-- Mengatur URL dari Blade ke variabel JavaScript -->
            <script>
                // var url_data_tamu = "http://127.0.0.1:8000/penjualan/create";

                // $(document).ready(function() {
                //     $(".cek").on("click", function() {
                //         table.setData();
                //     });

                //     var table = new Tabulator(".table_penjualan", {
                //         layout: "fitColumns",
                //         placeholder: "Belum ada data Data.",
                //         pagination: true, // enable pagination
                //         paginationSize: 10,
                //         paginationMode: "remote", // enable remote pagination
                //         ajaxURL: url_data_tamu, // set URL for AJAX request
                //         columns: [{
                //             title: "Name",
                //             field: "nama",
                //             width: 100
                //         }]
                //     });

                //     function tes() {
                //         console.log(url_data_tamu);
                //         table.setData();
                //     }
                // });
            </script>

            {{-- <script>
                var url_data_tamu = {{ url('/penjualan/create') }};
                $(".cek").on("click", function() {
                    table.setData();
                })


                var table = new Tabulator(".table_penjualan", {
                    layout: "fitColumns",
                    placeholder: "Belum ada data Data.",
                    pagination: true, // enable pagination
                    paginationSize: 10,
                    paginationMode: "remote", // enable remote pagination
                    ajaxURL: url_data_tamu, // set URL for AJAX request
                    columns: [{
                            title: "Name",
                            field: "nama",
                            width: 100
                        }, //column has a fixed width of 100px;
                    ]
                });

                function tes() {
                    console.log(url_data_tamu);
                    table.setData();
                }
            </script> --}}
            <!-- End custom js for this page-->
</body>

</html>
