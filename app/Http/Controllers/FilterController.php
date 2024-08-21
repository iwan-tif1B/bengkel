<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;


class FilterController extends Controller
{
    public function filterTransactions(Request $request)
    {
        $query = BukuTamu::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            $query->whereBetween('tanggal', [$startDate, $endDate]);
        }

        $bukuTamus = $query->get();

        return view('transaksi', compact('bukuTamus'));
    }
}
