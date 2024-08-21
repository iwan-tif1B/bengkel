<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $purchase = BukuTamu::where('id_user', $id_user)->where('status', 'Lunas')->first();

        if ($purchase) {
            $purchase->nama = $purchase->nama ?? '-';
            $purchase->paket_salon_mobil = $purchase->paket_salon_mobil ?? '-';
            $purchase->tanggal = $purchase->tanggal ?? '-';
            $purchase->status = $purchase->status ?? '-';

            $pdf = Pdf::loadView('invoices.invoice', ['purchase' => $purchase]);
            return $pdf->download('invoice_' . $purchase->id_user . '.pdf');
        } else {
            return redirect()->back()->with('error', 'Pembelian tidak ditemukan atau belum lunas.');
        }
    }
}
