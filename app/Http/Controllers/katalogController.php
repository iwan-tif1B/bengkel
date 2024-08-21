<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class katalogController extends Controller
{
    public function upload(Request $request)
    {   
        $gambar = $request->file('gambar')->store('', 'public');
        // $buktiTf = $request->file('bukti_tf')->store('', 'public');

        // $username = Auth::user()->name; // Menyimpan username pengguna yang sedang login

         DB::table('katalogs')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'desk' => $request->desk,
            'gambar_produk' => $gambar,

        ]);
        return redirect('/katalogs')->with('success', 'Data berhasil disimpan!');
    }
}
