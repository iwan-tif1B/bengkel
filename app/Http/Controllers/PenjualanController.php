<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuTamu;
use App\Models\kategoriModel;

class PenjualanController extends Controller
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
        $query->where('status', 'Lunas');
        // Ambil data
        $bukuTamus = $query->get();

        // Hitung total harga paket dan katalog
        $totalHargaPaket = $bukuTamus->sum(function ($item) {
            return $item->kategori->harga;
        });

        $totalHargaKatalog = $bukuTamus->sum(function ($item) {
            return $item->katalogs->harga;
        });

        // Kirim data ke view
        return view('penjualan', compact('bukuTamus', 'totalHargaPaket', 'totalHargaKatalog'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $query_mobil = BukuTamu::query()
            ->join('kategori', 'kategori.nama', '=', 'buku_tamu.paket_salon_mobil')
            ->select('buku_tamu.*', 'kategori.harga') // Sertakan kolom harga dari kategori
            ->orderBy('buku_tamu.tanggal', 'desc'); // Mengurutkan berdasarkan tanggal jika perlu

        // Tambahkan kondisi tanggal jika ada
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            $query_mobil->whereBetween('buku_tamu.tanggal', [$startDate, $endDate]);
        }

        // Ambil data
        $sum_mobil = $query_mobil->get();

        // Hitung total harga dari kategori
        $total = $sum_mobil->sum('harga');

        // motor
        $query_motor = BukuTamu::query()
            ->join('kategori', 'kategori.nama', '=', 'buku_tamu.paket_salon_motor')
            ->select('buku_tamu.*', 'kategori.harga') // Sertakan kolom harga dari kategori
            ->orderBy('buku_tamu.tanggal', 'desc'); // Mengurutkan berdasarkan tanggal jika perlu

        // Tambahkan kondisi tanggal jika ada
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            $query_motor->whereBetween('buku_tamu.tanggal', [$startDate, $endDate]);
        }

        // Ambil data
        $sum_motor = $query_motor->get();

        // Hitung total harga dari kategori
        $total_motor = $sum_motor->sum('harga');

        $query = BukuTamu::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            $query->whereBetween('tanggal', [$startDate, $endDate]);
        }

        $bukuTamus = $query->get();

        return view('penjualan_v1', compact('bukuTamus', 'total', 'total_motor'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
