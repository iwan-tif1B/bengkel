<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // public function generateInvoice($id_user)
    // {
    //     // Ambil data pembelian berdasarkan id_user dan pastikan statusnya lunas
    //     $purchase = BukuTamu::where('id_user', $id_user)->where('status', 'Lunas')->first();

    //     if ($purchase) {
    //         // Generate PDF
    //         $pdf = Pdf::loadView('invoices.invoice', ['purchase' => $purchase]);
    //         return $pdf->download('invoice_' . $purchase->id_user . '.pdf');
    //     } else {
    //         return redirect()->back()->with('error', 'Pembelian tidak ditemukan atau belum lunas.');
    //     }
    // }
    public function generateInvoice($id_user)
    {
        $purchase = BukuTamu::where('id', $id_user)->where('status', 'Lunas')->first();

        if ($purchase) {
            $purchase->nama = ($purchase->nama ?? '-');
            $purchase->paket_salon_mobil = ($purchase->paket_salon_mobil ?? '-');
            $purchase->tanggal = ($purchase->tanggal ?? '-');
            $purchase->status = ($purchase->status ?? '-');

            $pdf = Pdf::loadView('invoices.invoice', ['purchase' => $purchase]);
            return $pdf->download('invoice_' . $purchase->id_user . '.pdf');
        } else {
            return redirect()->back()->with('error', 'Pembelian tidak ditemukan atau belum lunas.');
        }
    }


    public function generateInvoiceall(Request $request)
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

        // Generate PDF
        $pdf = PDF::loadView('pdf.invoice', [
            'bukuTamus' => $bukuTamus,
            'totalHargaPaket' => $totalHargaPaket,
            'totalHargaKatalog' => $totalHargaKatalog,
        ]);

        // Set orientation to landscape
        $pdf->setPaper('A4', 'landscape');

        return $pdf->download('invoice.pdf');
    }
}
