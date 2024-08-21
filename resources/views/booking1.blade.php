@extends('master')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="col-md-12 grid-margin">
<div class="row">
<div class="col-12 col-xl-8 mb-4 mb-xl-0">
<h3 class="font-weight-bold">Selamat Datang</h3>
<h6 class="font-weight-normal mb-0">Buku Tamu Indibiz Experience Center</h6>
</div>
<div class="col-12 col-xl-4">
<div class="justify-content-end d-flex">
<div class="dropdown flex-md-grow-1 flex-xl-grow-0">
<img src="{{asset('assets/images/logos.png')}}" alt="profile" style="width:50%;margin-left:150px;"/>
</div>
</div>
</div>

<!-- partial -->
<div class="main-panel">        
<div class="content-wrapper">
<div class="row">
<div class="col-md-12 grid-margin stretch-card" style="margin-left:100px;">
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Form</h4>
    <p class="card-description">
        Pastikan data yang anda isi sudah benar !!
    </p>
    <form class="forms-sample"  action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleInputUsername1">Nama<span class="required">*</span></label>
            <input type="text" class="form-control" name ="nama" placeholder="Nama">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Bidang Usaha/Organisasi/Instansi/Perusahaan<span class="required">*</span></label>
            <input type="text" class="form-control"  name="bidang" placeholder="Bidang/Organisasi/Intansi/Perusahaan">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Email<span class="required">*</span></label>
            <input type="email" class="form-control" name ="email" placeholder="Email">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">No HP<span class="required">*</span></label>
            <input type="number" class="form-control" name="no_hp" placeholder="No Hp">
        </div>
        <div class="form-group">

        <!-- Event -->
        <label for="exampleInputConfirmPassword1">Event / Keperluan / Sosialisasi<span class="required">*</span></label><br>
        
        <input type="radio" id="pelatihan" name="event" value="Pelatihan">
        <label for="pelatihan">Pelatihan</label><br>

        <input type="radio" id="konsultasi" name="event" value="Konsultasi Layanan">
        <label for="konsultasi">Konsultasi Layanan</label><br>

        <input type="radio" id="podcast" name="event" value="Podcast/Recording/Shooting">
        <label for="podcast">Podcast/Recording/Shooting</label><br>

        <input type="radio" id="dll" name="event" value="Lainnya">
        <label for="dll">Lainnya</label><br>
        </div>
        <div class="form-group">
        <!-- End Event -->

        <!-- Produk -->
        <label for="exampleInputConfirmPassword1">Saya Hadir Untuk Kegiatan Mengenai Produk<span class="required">*</span></label><br>
        <input type="checkbox" id="indibiz" name="produk[]" value="Indibiz">
        <label for="indibiz">Indibiz</label><br>

        <input type="checkbox" id="indibizPay" name="produk[]" value="IndibizPay">
        <label for="indibizPay">IndibizPay</label><br>

        <input type="checkbox" id="netmonk" name="produk[]" value="Netmonk">
        <label for="netmonk">Netmonk</label><br>

        <input type="checkbox" id="OCA" name="produk[]" value="OCA">
        <label for="OCA">OCA</label><br>

        <input type="checkbox" id="pijar" name="produk[]" value="Pijar">
        <label for="pijar">Pijar</label><br>

        <input type="checkbox" id="agree" name="produk[]" value="Agree">
        <label for="agree">Agree</label><br>

        <input type="checkbox" id="PadiUMKM" name="produk[]" value="Padi UMKM">
        <label for="PadiUMKM">Padi UMKM</label><br>
        </div>
        <!-- End Produk -->

        <div class="form-group">
        <label for="exampleInputUsername1">Tanggal<span class="required">*</span></label>
            <input type="date" class="form-control" name ="tanggal">
        </div>

        <div class="form-group">
        <label for="exampleInputUsername1">Upload Selfie<span class="required">*</span></label>
            <input type="file" class="form-control" name ="gambar">
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Reset</button>
    </form>
    </div>
    </div>
</div>
</div>

@endsection