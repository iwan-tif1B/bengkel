<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoriModel;


class PageController extends Controller
{
    public function index() {
        // You can fetch and pass any initial data needed for the page7 view here
        return view('page7');
    }

    public function info($id) {
        $kategori = kategoriModel::find($id);

        if (!$kategori) {
            return abort(404, 'Category not found');
        }

        return view('page7', compact('kategori'));
    }
    
}
