<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;

    protected $table = 'katalogs';
    protected $fillable = ['id','nama','harga','desk','gambar_produk','katalog'];
}
