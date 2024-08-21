<?php

namespace App\Http\Controllers;
use App\Models\bukuTamu;
use Illuminate\Http\Request;

class antrianController extends Controller
{
    public function index(){
        $bukuTamus = bukuTamu::all();
        return view('antrian', compact('bukuTamus')); //
    }
}
