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
<h6 class="font-weight-normal mb-0">Form Produk Paket Salon Motor XCLUS MOTOCARE</h6>
</div>
<div class="col-12 col-xl-4">
<div class="justify-content-end d-flex">
<div class="dropdown flex-md-grow-1 flex-xl-grow-0">
<img src="{{asset('asset/images/logoxclus1.png')}}" alt="profile" style="width:50%;margin-left:150px;"/>
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
    <h4 class="card-title">Form</h4>
    <p class="card-description">
        Pastikan data yang anda isi sudah benar !!
    </p>
    <form class="forms-sample"  action="{{ route('upload.kategori') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleInputUsername1">Nama Paket<span class="required">*</span></label>
            <input type="text" class="form-control" name ="nama" placeholder="Nama">
        </div>

        <div class="form-group">
            <label for="exampleInputUsername1">Deskripsi<span class="required">*</span></label>
            <textarea id="w3review" name="desk" rows="4" cols="0" class="form-control" placeholder="Deskripsi"></textarea>
            <div id="preview"></div>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Harga<span class="required">*</span></label>
            <input type="text" class="form-control"  name="harga" placeholder="Harga">
        </div>

        <!-- <div class="form-group">
        <label for="exampleInputEmail1">Tipe Mobil dan Motor<span class="required">*</span></label>
            <input type="text" class="form-control" name ="tipe_mobil" placeholder="Tipe Mobil">
        </div> -->

        <!-- <div class="form-group">
        <label for="exampleInputPassword1">Harga<span class="required">*</span></label>
            <input type="number" class="form-control" name="harga" placeholder="Harga">
        </div>
        <div class="form-group"> -->

        <!-- Event
        <label for="exampleInputConfirmPassword1">Paket Salon Mobil</label><br>
        
        <input type="radio" id="regular package" name="paket_salon_mobil" value="Regular Package">
        <label for="regular package">Regular Package</label><br>

        <input type="radio" id="premium package 1" name="paket_salon_mobil" value="Premium Package 1">
        <label for="premium package 1">Premium Package 1</label><br>

        <input type="radio" id="premium package 2" name="paket_salon_mobil" value="Premium Package 2">
        <label for="premium package 2">Premium Package 2</label><br>

        <input type="radio" id="premium package 3" name="paket_salon_mobil" value="Premium Package 3">
        <label for="premium package 3">Premium Package 3</label><br>

        <input type="radio" id="exclusive 1" name="paket_salon_mobil" value="Exclusive 1">
        <label for="exclusive 1">Exclusive 1</label><br>

        <input type="radio" id="exclusive 2" name="paket_salon_mobil" value="Exclusive 2">
        <label for="exclusive 2">Exclusive 2</label><br>

        <input type="radio" id="exclusive 3" name="paket_salon_mobil" value="Exclusive 3">
        <label for="exclusive 3">Exclusive 3</label><br>

        <input type="radio" id="VIP" name="paket_salon_mobil" value="VIP">
        <label for="VIP">VIP</label><br>

        </div>
        <div class="form-group">
        End Event

        Produk -->
        <!-- <label for="exampleInputConfirmPassword1">Paket Salon Motor</label><br>
        <input type="checkbox" id="small" name="paket_salon_motor[]" value="Small">
        <label for="Small">Small</label><br>

        <input type="checkbox" id="medium" name="paket_salon_motor[]" value="Medium">
        <label for="Medium">Medium</label><br>

        <input type="checkbox" id="large" name="paket_salon_motor[]" value="Large">
        <label for="Large">Large</label><br>

        <input type="checkbox" id="xtra large" name="paket_salon_motor[]" value="Xtra Large">
        <label for="Xtra Large">Xtra Large</label><br> -->

        </div>
        <!-- End Produk -->

        <!-- <div class="form-group">
        <label for="exampleInputUsername1">Tanggal<span class="required">*</span></label>
            <input type="date" class="form-control" name ="tanggal">
        </div>

        <div class="form-group">
        <label for="exampleInputUsername1">Upload Selfie<span class="required">*</span></label>
            <input type="file" class="form-control" name ="gambar">
        </div> -->

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Reset</button>
    </form>
    </div>
    </div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var textarea = document.getElementById('w3review');
        var preview = document.getElementById('preview');

        textarea.addEventListener('input', function() {
            var value = this.value.trim();
            if (value !== '') {
                var lines = value.split('\n');
                var html = '<ul>';
                for (var i = 0; i < lines.length; i++) {
                    html += '<li>' + lines[i] + '</li>';
                }
                html += '</ul>';
                preview.innerHTML = html;
            } else {
                preview.innerHTML = '';
            }
        });
    });
</script>
@endsection