<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\bukuTamu;



class AuthController extends Controller
{
    public function postlogin(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        
        if (Auth::user()->role == 'Admin') {
            return redirect('/dashboard');
        } if (Auth::user()->role == 'cashier') {
            return redirect('kasir');
        }else{
            return redirect('home');
        }
    }

    return redirect('/portal')->with('error', 'Email atau password salah!');
}
    public function register(Request $request)
    {
        // Validasi data yang diterima dari form pendaftaran
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Buat pengguna baru berdasarkan data yang diterima
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Otentikasi pengguna yang baru terdaftar
        Auth::login($user);

        // Redirect pengguna ke halaman tertentu setelah pendaftaran berhasil
        return redirect('/portal')->with('success', 'Pendaftaran berhasil! Selamat datang, ' . $user->name . '!');
    }

    public function antrian(){
        // Memeriksa apakah pengguna sudah login
        if(Auth::check()){ // Misalkan Anda menggunakan Laravel
            // Jika pengguna sudah login, dapatkan nama pengguna
            // dd(Auth::user());
            $username = Auth::user()->name;
            
            // Cari data di model Buku Tamu berdasarkan nama pengguna
            $bukuTamus = bukuTamu::where('id_user', $username)->get();
            
            // Lakukan sesuatu dengan data yang ditemukan
            // Misalnya, tampilkan data atau kirim ke tampilan
            return view('customerantrian', compact('bukuTamus'));
        } else {
            // Jika pengguna belum login, bisa mengarahkan ke halaman login atau melakukan tindakan lainnya
            return redirect('/portal'); // Misalkan menggunakan Laravel, mengarahkan ke rute login
        }
    }
    public function status(){
        // Memeriksa apakah pengguna sudah login
        if(Auth::check()){ // Misalkan Anda menggunakan Laravel
            // dd(auth()->user()->id);

            // Cari data di model Buku Tamu berdasarkan nama pengguna
            $bukuTamus = bukuTamu::where('id_user', auth()->user()->id)->get();
            
            // Lakukan sesuatu dengan data yang ditemukan
            // Misalnya, tampilkan data atau kirim ke tampilan
            return view('CustomerStatus', compact('bukuTamus'));
        } else {
            // Jika pengguna belum login, bisa mengarahkan ke halaman login atau melakukan tindakan lainnya
            return redirect('/portal'); // Misalkan menggunakan Laravel, mengarahkan ke rute login
        }
    }
    



    public function logout()
    {
        Auth::logout();
        return redirect('/portal');
    }
    public function login()
    {
        return view('login');
    }
}
