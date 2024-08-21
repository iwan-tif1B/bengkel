@extends('master')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<header style="margin-left: 2%; margin-top: 2%;">
        <a href="ownerproduk" style="color:#FBB034"><img src="assets/img/back_button.png"></a>
    </header>

<div class="col-md-12 grid-margin">
<div class="row">
<div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <br>
<h3 class="font-weight-bold">Selamat Datang</h3>
<h6 class="font-weight-normal mb-0">Form Produk Paket Salon Mobil XCLUS MOTOCARE</h6>
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
                                <label for="kategori">Kategori</label>
                                <select id="kategori" name="kategori" class="form-control">
                                    <option value="Mobil">Mobil</option>
                                    <option value="Motor">Motor</option>
                                </select>
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
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <!-- <button class="btn btn-light">Reset</button> -->
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