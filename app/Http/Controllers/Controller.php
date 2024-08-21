<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // Pastikan ini adalah import yang benar
abstract class Controller
{
    //

    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);
    
        // Menyimpan file gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $filename);
    
            // Simpan nama file ke database jika diperlukan
            // Example: 
            // YourModel::create([
            //     'gambar' => $filename,
            //     // other fields
            // ]);
        }
    
        // Redirect atau memberikan feedback setelah penyimpanan berhasil
        return redirect()->route('buku_tamu.index')->with('success', 'File berhasil diunggah!');
    }
    
}
