@extends('master')
@section('content')
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'Success',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('status') }}"; // Ganti 'redirect-page' dengan URL tujuan Anda
                }
            });
        });
    </script>
@endif
<header style="margin-left: 2%; margin-top: 2%;">
        <a href="/home" style="color:#FBB034"><img src="assets/img/back_button.png"></a>
    </header>
<div class="col-md-12 grid-margin">
    <div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0" style="margin-top: 30px; margin-bottom: 20px;">
    <h3 class="font-weight-bold">Selamat Datang</h3>
    <h6 class="font-weight-normal mb-0">Form Pendaftaran Salon Mobil dan Motor XCLUS MOTOCARE</h6>
</div>
        <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <img src="{{ asset('asset/images/logoxclus1.png') }}" alt="profile" style="width:50%; margin-left:150px;" />
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <form class="forms-sample" action="{{ route('buku_tamu.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return confirmFormSubmit(event)">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama<span class="required">*</span></label>
                                <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat<span class="required">*</span></label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>

                            <div class="form-group">
                                <label for="paket_salon">Paket Salon</label><span class="required">*</span>
                                <select id="paket_salon" name="paket_salon" class="form-control">
                                    <option value="None">None</option>
                                    <option value="Mobil">Paket Salon Mobil</option><span class="required">*</span>
                                    <option value="Motor">Paket Salon Motor</option><span class="required">*</span>
                                </select>
                            </div>

                            <div class="form-group" id="mobil_section">
                                <label for="paket_salon_mobil">Paket Salon Mobil</label><span class="required">*</span>
                                <select id="paket_salon_mobil" name="paket_salon_mobil" class="form-control">
                                    <option value="">Pilih Paket Salon Mobil</option>
                                    @foreach ($mobil as $item)
                                        <option value="{{ $item->nama }}">{{ $item->nama }} | {{ $item->harga }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" id="tipe_mobil_section">
                                <label for="tipe_mobil">Tipe Mobil<span class="required">*</span></label>
                                <select id="tipe_mobil" name="tipe_mobil" class="form-control">
                                    <option value="None">None</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Minibus">Minibus</option>
                                    <option value="SUV">SUV</option>
                                    <option value="MPV">MPV</option>
                                    <option value="Pickup Truck">Pickup Truck</option>
                                    <option value="Elektrik">Elektrik</option>
                                </select>
                            </div>

                            <div class="form-group" id="motor_section">
                                <label for="paket_salon_motor">Paket Salon Motor</label><span class="required">*</span>
                                <select id="paket_salon_motor" name="paket_salon_motor" class="form-control">
                                    <option value="">Pilih Paket Salon Motor</option>
                                    @foreach ($motor as $item)
                                        <option value="{{ $item->nama }}">{{ $item->nama }} | {{ $item->harga }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" id="tipe_motor_section">
                                <label for="tipe_motor">Tipe Motor<span class="required">*</span></label>
                                <select id="tipe_motor" name="tipe_motor" class="form-control">
                                    <option value="None">None</option>
                                    <option value="Small 125cc">Small</option>
                                    <option value="Medium 150cc">Medium</option>
                                    <option value="Large 155cc">Large</option>
                                    <option value="Xtra Large 250cc - 1000cc">Xtra Large</option>
                                </select>
                            </div>

                            <div class="form-group" id="mobil_section">
                                <label for="katalog">Katalog</label>
                                <select id="katalog" name="katalog" class="form-control">
                                    <option value="">Pilih katalog</option>
                                    @foreach ($katalogs as $item)
                                        <option value="{{ $item->nama }}">{{ $item->nama }} | {{ $item->harga }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="no_hp">No HP<span class="required">*</span></label>
                                <input 
                                    type="text" 
                                    id="no_hp" 
                                    name="no_hp" 
                                    class="form-control" 
                                    placeholder="No HP" 
                                    maxlength="12" 
                                    pattern="\d{1,12}" 
                                    title="Only numbers are allowed, up to 12 digits" 
                                    oninput="validateInput(this)">
                                </div>
                                <script>
                                        function validateInput(input) {
                                            // Replace any non-digit characters
                                            input.value = input.value.replace(/\D/g, '');
                                        }
                                        </script>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tanggal<span class="required">*</span></label>
                                <input type="date" class="form-control" name="tanggal" min="{{ date('Y-m-d') }}">
                            </div>

                            <div class="form-group">
    <label for="exampleInputUsername1">Upload Foto Kendaraan<span class="required">*</span></label>
    <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*">
</div>
<!-- <script>
document.getElementById('gambar').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const fileType = file['type'];
        // const validImageTypes = ['image/gif', 'image/jpeg', 'image/png','image/JPG','image/jpg','image/JPEG','image/PNG'];
        if (!validImageTypes.includes(fileType)) {
            alert('Hanya file gambar yang diperbolehkan!');
            this.value = ''; // Clear the input
        }
    }
});
</script> -->



                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const paketSalon = document.getElementById('paket_salon');
    const paketSalonMobilSection = document.getElementById('mobil_section');
    const tipeMobilSection = document.getElementById('tipe_mobil_section');
    const paketSalonMotorSection = document.getElementById('motor_section');
    const tipeMotorSection = document.getElementById('tipe_motor_section');

    const updateVisibility = () => {
        const selectedValue = paketSalon.value;
        if (selectedValue === 'Mobil') {
            paketSalonMobilSection.style.display = 'block';
            tipeMobilSection.style.display = 'block';
            paketSalonMotorSection.style.display = 'none';
            tipeMotorSection.style.display = 'none';
        } else if (selectedValue === 'Motor') {
            paketSalonMobilSection.style.display = 'none';
            tipeMobilSection.style.display = 'none';
            paketSalonMotorSection.style.display = 'block';
            tipeMotorSection.style.display = 'block';
        } else {
            paketSalonMobilSection.style.display = 'none';
            tipeMobilSection.style.display = 'none';
            paketSalonMotorSection.style.display = 'none';
            tipeMotorSection.style.display = 'none';
        }
    };

    paketSalon.addEventListener('change', updateVisibility);

    // Initial visibility check
    updateVisibility();
});

function confirmFormSubmit(event) {
    event.preventDefault();
    const form = event.target;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Apakah anda sudah yakin ?",
        text: "Apakah data yang anda masukkan sudah benar ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Sudah",
        cancelButtonText: "Tidak, Belum!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Your form is safe :)",
                icon: "error"
            });
        }
    });
}
</script>
@endsection
