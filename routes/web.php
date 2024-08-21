<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\buku_tamu_controller;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\antrianController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\katalogController;
use App\Models\kategoriModel;
use App\Models\katalog;
use App\Http\Controllers\UploadController;
// get invoice controller
use App\Http\Controllers\InvoiceController;
// get filter controller
use App\Http\Controllers\FilterController;




Route::get('/', function () {
    $bukuTamus = kategoriModel::all();
    $katalog = katalog::all();

    return view('index', compact('bukuTamus', 'katalog'));
});
Route::get('/home', function () {
    $bukuTamus = kategoriModel::all();
    $katalog = katalog::all();

    return view('index', compact('bukuTamus', 'katalog'));
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/page', function () {
    return view('page');
});
Route::get('/page1', function () {
    return view('page1');
});
Route::get('/page2', function () {
    return view('page2');
});
Route::get('/page3', function () {
    return view('page3');
});
Route::get('/page4', function () {
    return view('page4');
});
Route::get('/page5', function () {
    return view('page5');
});
Route::get('/page6', function () {
    return view('page6');
});
Route::get('/page7', [PageController::class, 'index']);
Route::get('/page7/{id}', [PageController::class, 'info']);

// Route login
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/portal', [AuthController::class, 'login']);

Route::get('/booking', function () {
    return view('booking1');
});
Route::get('/data_buku_tamu', function () {
    if (auth()->check()) {
        return view('data_buku_tamu');
    } else {
        return view('login');
    }
});
Route::get('/antrian', [antrianController::class, 'index']);
Route::get('/produk', function () {
    return view('produk');
});

Route::get('/katalogs', function () {
    $katalogs = katalog::all();
    // dd($katalogs);
    return view('katalog', compact('katalogs'));
});

Route::get('/upload', function () {
    return view('upload');
});


Route::get('/pembayaran', function () {
    return view('pembayaran');
});


Route::get('/uploadKatalog', function () {
    return view('uploadKatalog');
});

Route::get('/uploadmotor', function () {
    return view('uploadmotor');
});

Route::post('/postKatalog', [katalogController::class, 'upload'])->name('post.katalog');


Route::get('/kasirproduk', function () {
    $bukuTamus = kategoriModel::all();
    return view('kasirproduk', compact('bukuTamus'));
});

Route::get('/ownerproduk', function () {
    $bukuTamus = kategoriModel::all();
    return view('ownerproduk', compact('bukuTamus'));
});

Route::get('/kasirsize', function () {
    $bukuTamus = kategoriModel::all();
    return view('kasirsize', compact('bukuTamus'));
});


// Route::get('/penjualan', function () {
//     return view('penjualan');
// });

Route::get('/penjualan', [PenjualanController::class, 'index']);
// Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/pemesanan', [TransaksiController::class, 'pemesanan']);
Route::get('/dashboard', [buku_tamu_controller::class, 'dashboard']);
Route::get('/katalog', [buku_tamu_controller::class, 'dataKatalog']);
Route::resource('/buku_tamu', buku_tamu_controller::class);
Route::get('/admin_buku_tamu', [buku_tamu_controller::class, 'data']);
Route::get('/kasir', [buku_tamu_controller::class, 'kasir']);
Route::get('/approved/{id}', [TransaksiController::class, 'approved']);
Route::get('/delete/{id}', [TransaksiController::class, 'delete']);
Route::post('/upload', [buku_tamu_controller::class, 'upload'])->name('upload.kategori');
Route::get('/buku_tamu/hitung_tamu', [buku_tamu_controller::class, 'hitung_tamu'])->name('buku_tamu.hitung_tamu');
Route::post('/buku-tamu/Bukti_Tf-bukti-tf', [buku_tamu_controller::class, 'updateBuktiPembayaran'])->name('buku_tamu.update_bukti_tf');
Route::post('/uploadmotor', [buku_tamu_controller::class, 'uploadmotor'])->name('upload.mootor');
Route::post('/uploadKatalog', [buku_tamu_controller::class, 'uploadKatalog'])->name('upload.katalog');
Route::get('/antri', [AuthController::class, 'antrian'])->name('antri.customer');
// Routes ini yang diubah
Route::get('/status', [AuthController::class, 'status'])->name('antri.customer');
// routes/web.php
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::delete('/delete/{id_user}', [buku_tamu_Controller::class, 'destroy'])->name('bukuTamu.destroy');
Route::delete('/deleteee/{id}', [buku_tamu_Controller::class, 'deleteee'])->name('bukuTamu.delete');




//login
Route::post('/upload/{id}', [UploadController::class, 'upload'])->name('upload');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::post('/regis', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/portal', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
})->name('register');

// Invoice
Route::get('/invoice/{id_user}', [InvoiceController::class, 'generateInvoice'])->name('generate.invoice');
// filter
Route::get('/transactions/filter', [FilterController::class, 'filterTransactions'])->name('filter.transactions');
