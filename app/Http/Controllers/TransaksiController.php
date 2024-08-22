<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuTamu;
use Illuminate\Support\Facades\DB;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = BukuTamu::query();

        // Filter berdasarkan parameter request jika ada
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('tanggal', [$startDate, $endDate]);
        }
        if ($request->has('paket_salon')) {
            $query->where('tipe_motor', $request->input('paket_salon'));
        }
        // $query->where('status', 'Lunas');
        // Ambil data
        $bukuTamus = $query->get();



        // Hitung total harga paket dan katalog
        $totalHargaPaket = $bukuTamus->sum(function ($item) {
            return $item->kategori->harga;
        });

        $totalHargaKatalog = $bukuTamus->sum(function ($item) {
            return $item->katalogs->harga;
        });

        // count
        $count_orderan = $bukuTamus->count();
        $count_mobil = $bukuTamus->where('tipe_motor', 'Mobil')->count();
        $count_motor = $bukuTamus->where('tipe_motor', 'Motor')->count();
        $total_semua =  $totalHargaPaket + $totalHargaKatalog;

        // Kirim data ke view
        return view(
            'transaksi',
            compact('bukuTamus', 'totalHargaPaket', 'totalHargaKatalog', 'total_semua', 'count_orderan', 'count_mobil', 'count_motor')
        );
    }
    public function pemesanan()
    {
        $bukuTamus = bukuTamu::all();
        return view('Pemesanan', compact('bukuTamus')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        $data = bukuTamu::find($id);
        return view('pembayaran', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update($id, $type)
    {
        $tamu = bukuTamu::find($id);
        if ($type === 'bukti') {
            $data = $tamu->Bukti_Tf;
        } else {
            $data = $tamu->gambar;
        }

        // Assuming $gambar contains the Base64 string with data URL prefix
        return view('lihat_gambar', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     $transaksi = Transaksi::find($id);

    //     // Cek jika data ditemukan
    //     if (!$transaksi) {
    //         return redirect()->back()->with('error', 'Data not found.');
    //     }

    //     // Hapus data
    //     $transaksi->delete();

    //     // Redirect ke halaman sebelumnya dengan pesan sukses
    //     return redirect()->back()->with('success', 'Data deleted successfully.');








    //     // Temukan data berdasarkan ID
    //     $bukuTamu = bukuTamu::find($id);

    //     // Cek jika data ditemukan
    //     if (!$bukuTamu) {
    //         return redirect()->back()->with('error', 'Data not found.');
    //     }

    //     // Hapus data
    //     $bukuTamu->delete();

    //     // Redirect ke halaman sebelumnya dengan pesan sukses
    //     return redirect()->back()->with('success', 'Data deleted successfully.');
    // }

    public function approved(string $id)
    {
        // Find the record with the specific ID
        $data = DB::table('buku_tamu')->where('id', $id)->get();

        // Check if the record was found
        if (!$data) {
            return redirect()->route('transaksi')->with('error', 'Data not found.');
        }

        // Get the last queue number and increment it
        $lastQueueNumber = DB::table('buku_tamu')->max('nomor_antrian');
        $lastQueueNumber = is_numeric($lastQueueNumber) ? (int) $lastQueueNumber : 0; // Default to 0 if null
        $newQueueNumber = $lastQueueNumber + 1;

        // Update the record
        DB::table('buku_tamu')->where('id', $id)
            ->update([
                'nomor_antrian' => $newQueueNumber,
                'status' => 'Lunas'
            ]);

        // Redirect with a success message
        return redirect()->route('transaksi')->with('success', 'Data updated successfully.');
    }
}
