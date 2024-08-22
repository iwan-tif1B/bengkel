@extends('master')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <header style="margin-left: 2%; margin-top: 2%;">
        <a href="/home" style="color:#FBB034"><img src="assets/img/back_button.png"></a>
    </header>
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <br>
                <h3 class="font-weight-bold">Selamat Datang</h3>
                <h6 class="font-weight-normal mb-0">Form Bukti Pembayaran</h6>
            </div>
            <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <img src="{{ asset('asset/images/logoxclus1.png') }}" alt="profile"
                            style="width:50%;margin-left:150px;" />
                    </div>
                </div>
            </div>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper" style="color:black">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card" style="margin-left:100px;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3 card-title">
                                        <div class="col-lg-6 border mx-auto my-2">
                                            <!-- Baris pertama -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Email</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">{{ $data->user->email }}</div>
                                            </div>

                                            <!-- Baris kedua -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Alamat</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">{{ $data->alamat }}</div>
                                            </div>

                                            <!-- Baris ketiga -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>No Hp</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">{{ $data->no_hp }}</div>
                                            </div>

                                            <!-- Baris keempat -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Tipe Kendaraan</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">{{ $data->tipe_mobil }}</div>
                                            </div>

                                            <!-- Baris kelima -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Paket Untuk Jenis</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">{{ $data->tipe_motor }}</div>
                                            </div>

                                            <!-- Baris keenam -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Nama Paket</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">{{ $data->kategori->nama }}</div>
                                            </div>

                                            <!-- Baris ketujuh -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Harga Paket</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">Rp. {{ number_format($data->kategori->harga, 0) }}
                                                </div>
                                            </div>

                                            <!-- Baris kedelapan -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Katalog</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">{{ $data->katalogs->nama }}</div>
                                            </div>

                                            <!-- Baris kesembilan -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Harga Katalog</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">Rp. {{ number_format($data->katalogs->harga, 0) }}
                                                </div>
                                            </div>

                                            <!-- Baris kesepuluh -->
                                            <div class="row">
                                                <div class="col-lg-4"><strong>Tanggal Order</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">
                                                    {{ \Carbon\Carbon::parse($data->tanggal)->format('d-M-Y') }}</div>
                                            </div>
                                            @php
                                                $total =
                                                    intval($data->katalogs->harga) + intval($data->kategori->harga);
                                            @endphp

                                            <div class="row">
                                                <div class="col-lg-4"><strong>Total Orderan</strong></div>
                                                <div class="col-md-2">:</div>
                                                <div class="col-lg-6">
                                                    <u>Rp. {{ number_format($total, 0, ',', '.') }}</u>
                                                </div>
                                            </div>

                                            {{-- end row --}}
                                        </div>
                                    </div>
                                    <h4 class="card-title mt-3">Form</h4>
                                    {{-- data diri user --}}

                                    <p class="card-description">
                                        Pastikan data yang anda isi sudah benar !!
                                    </p>
                                    <form class="forms-sample"
                                        action="{{ route('buku_tamu.update_bukti_tf', ['id' => $data->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="bukti_tf">
                                                Upload Bukti Pembayaran (BCA Virtual Account: 018240173040) <span
                                                    class="required">*</span>
                                            </label>
                                            <input type="file" id="bukti_tf" class="form-control" name="Bukti_Tf"
                                                accept="image/*">
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
