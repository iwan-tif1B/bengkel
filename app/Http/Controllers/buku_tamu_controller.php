<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\katalog;
use App\Models\bukuTamu;
use Illuminate\Http\Request;
use App\Models\kategoriModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class buku_tamu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $mobil = kategoriModel::where('kategori', 'Mobil')->get();
    //     $motor = kategoriModel::where('kategori', 'Motor')->get();
    //     $katalogs = katalog::All();
    //     $hitung_hari_ini = BukuTamu::where('tanggal', date("Y-m-d"))->count();
    //     if ($hitung_hari_ini > 4) {
    //         $tambah = 1;
    //     } else {
    //         $tambah = 0;
    //     }
    //     if (auth()->check()) {
    //         return view('bukuTamu', compact('mobil', 'motor', 'katalogs', 'hitung_hari_ini'));
    //     } else {
    //         return view('login');
    //     }
    // }
    public function index()
    {
        // Ambil data kategori dan katalog
        $mobil = kategoriModel::where('kategori', 'Mobil')->get();
        $motor = kategoriModel::where('kategori', 'Motor')->get();
        $katalogs = katalog::All();
        $hitung_hari_ini = BukuTamu::where('tanggal', date("Y-m-d"))->count();

        // Menentukan tanggal yang memiliki jumlah booking kurang dari 4
        $today = Carbon::now();
        $maxDaysToCheck = 30; // Jumlah maksimum hari yang akan diperiksa
        $availableDates = [];

        for ($i = 0; $i < $maxDaysToCheck; $i++) {
            $checkDate = $today->copy()->addDays($i)->format('Y-m-d');
            $buku_tamu_count = BukuTamu::where('tanggal', $checkDate)->count();

            if ($buku_tamu_count < 4) {
                $availableDates[] = $checkDate;
            }
        }
        // Mengecek apakah user sudah login
        if (auth()->check()) {
            return view('bukuTamu', compact('mobil', 'motor', 'katalogs', 'hitung_hari_ini', 'availableDates'));
        } else {
            return view('login');
        }
    }


    public function dataKatalog()
    {
        return view('Katalog');
    }


    public function kasir()
    {
        // dd(Auth::User());
        return view('kasir');
    }




    public function dashboard()
    {
        return view('dashboard');
    }


    public function data()
    {
        $data = bukuTamu::paginate(5);
        return view('data_buku_tamu', compact('data'));
    }

    // public function tampil_data()
    // {

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tanggal = $request->input('tanggal');

        // Menghitung jumlah tamu berdasarkan tanggal yang diterima
        $buku_tamu_today = BukuTamu::where('tanggal', $tanggal)->count();

        // Mengembalikan data dalam format JSON
        return response()->json([
            'jumlah_tamu' => $buku_tamu_today
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'gambar' => 'required', // Adjust as needed
        ]);

        // Get the authenticated user's ID
        $userId = auth()->id();

        // Store the uploaded image
        $gambarPath = $request->file('gambar')->store('', 'public');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileContent = file_get_contents($file->getRealPath());
            $base64File = base64_encode($fileContent);
            $mimeType = $file->getMimeType(); // Mendapatkan tipe MIME file

            // Format string Base64 dengan tipe MIME
            $base64Image = 'data:' . $mimeType . ';base64,' . $base64File;

            Log::info('Base64 Image:', ['base64Image' => $base64Image]);

            // Simpan string Base64 dalam database
        }

        // Insert data into the database
        DB::table('buku_tamu')->insert([
            'id_user' => $userId,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tipe_mobil' => ($request->tipe_mobil ?? $request->tipe_motor),
            'tipe_motor' => ($request->paket_salon ?? ""),
            'no_hp' => $request->no_hp,
            'paket_salon_mobil' => $request->paket_salon_mobil ?? $request->paket_salon_motor,
            'paket_salon_motor' => isset($request->paket_salon_motor) ? $request->paket_salon_motor : null,
            'tanggal' => $request->tanggal,
            'katalog' => $request->katalog,
            'status' => 'Belum Di Bayar',
            'gambar' => $base64Image,
        ]);

        // Redirect with success message
        return redirect()->route('buku_tamu.index')->with('success', 'Data berhasil disimpan!');
    }


    public function upload(Request $request)
    {
        // dd($request);
        DB::table('kategori')->insert([
            'nama' => $request->nama,
            'desk' => $request->desk,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('buku_tamu.index')->with('success', 'Data berhasil disimpan!');
    }

    public function kategori()
    {
        $bukuTamus = kategoriModel::all();
        return view('upload', compact('bukuTamus'));
    }

    public function katalog()
    {
        $katalogs = katalog::all();
        return view('katalog', compact('katalogs'));
    }
    public function uploadKatalog(Request $request)
    {
        $gambar = $request->file('gambar')->store('', 'public');
        // $buktiTf = $request->file('bukti_tf')->store('', 'public');

        // $username = Auth::user()->name; // Menyimpan username pengguna yang sedang login

        DB::table('katalogs')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'desk' => $request->desk,
            'gambar_produk' => $gambar

        ]);

        // dd($username);
        return redirect('/katalogs')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function deleteee($id)
    {
        $data = bukuTamu::find($id);
        $data->delete();
        return redirect('/status')->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = bukuTamu::find($id);
        // Assuming $gambar contains the Base64 string with data URL prefix
        return view('penjualan_v2.blade', compact('data'));
    }


    // public function updateBuktiPembayaran($id)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'Bukti_Tf' => 'required', // Validasi file gambar
    //     ]);

    //     // Ambil ID pengguna yang sedang login
    //     $userId = Auth::id();
    //     Log::info('User ID:', ['userId' => $userId]);

    //     // Ambil data pengguna berdasarkan id_user
    //     $bukuTamu = bukuTamu::where('id', $id)->first();
    //     $bukuTamu->status = "Menunggu Konfirmasi";

    //     if ($bukuTamu) {
    //         // Proses file gambar
    //         $file = $request->file('Bukti_Tf');
    //         $fileName = time() . '_' . $file->getClientOriginalName();

    //         // Simpan file gambar di folder 'public/images/bukti_pembayaran'
    //         $filePath = $file->storeAs('public/images/bukti_pembayaran', $fileName);
    //         Log::info('File Path:', ['filePath' => $filePath]);

    //         // Update kolom upload dengan nama file
    //         $bukuTamu->Bukti_Tf = $fileName;

    //         // Simpan perubahan menggunakan query builder untuk memastikan where id_user
    //         $updateResult = bukuTamu::where('id_user', $userId)->update(['Bukti_Tf' => $fileName]);
    //         Log::info('Update Result:', ['updateResult' => $updateResult]);

    //         return redirect()->route('antri.customer');
    //     } else {
    //         return response()->json(['message' => 'Pengguna tidak ditemukan.'], 404);
    //     }
    // }
    public function updateBuktiPembayaran(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'Bukti_Tf' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file sebagai gambar dan ukuran maksimum
        ]);

        // Ambil ID pengguna yang sedang login
        $userId = Auth::id();
        Log::info('User ID:', ['userId' => $userId]);

        // Ambil data berdasarkan ID
        $bukuTamu = bukuTamu::find($id);

        if ($bukuTamu) {
            // Update status ke "Menunggu Konfirmasi"
            $bukuTamu->status = "Menunggu Konfirmasi";

            // Proses file gambar jika ada
            if ($request->hasFile('Bukti_Tf')) {
                $file = $request->file('Bukti_Tf');
                $fileContent = file_get_contents($file->getRealPath());
                $base64File = base64_encode($fileContent);
                $mimeType = $file->getMimeType(); // Mendapatkan tipe MIME file

                // Format string Base64 dengan tipe MIME
                $base64Image = 'data:' . $mimeType . ';base64,' . $base64File;

                Log::info('Base64 Image:', ['base64Image' => $base64Image]);

                // Simpan string Base64 dalam database
                $bukuTamu->Bukti_Tf = $base64Image;
            }

            // Simpan perubahan ke database
            $bukuTamu->save();

            Log::info('Update Result:', ['bukuTamu' => $bukuTamu]);

            return redirect()->route('antri.customer')->with('success', 'Bukti pembayaran berhasil diupload.');
        } else {
            return response()->json(['message' => 'Pengguna tidak ditemukan.'], 404);
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        // $bukuTamu = bukuTamu::where('id_user', $id)->first();
        // dd($bukuTamu);
        // $bukuTamu->delete();

        DB::table('buku_tamu')
            ->where('id', $id)
            ->update(['status' => 'Di Batalkan']); // Ubah status sesuai kebutuhan

        return redirect('/transaksi')->with('success', 'Data berhasil dibatalkan!');

        return redirect('/transaksi')->with('success', 'Data berhasil dihapus!');
    }
}
