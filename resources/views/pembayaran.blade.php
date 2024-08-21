@extends('master')
@section('content')
@if(session('success'))
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
    <form class="forms-sample" action="{{ route('buku_tamu.update_bukti_tf') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="bukti_tf">Upload Bukti Pembayaran ( BCA Virtual Account: 018240173040 ) <span class="required">*</span></label>
        <input type="file" id="bukti_tf" class="form-control" name="Bukti_Tf">
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</form>
    </div>
    </div>
</div>
</div>

@endsection