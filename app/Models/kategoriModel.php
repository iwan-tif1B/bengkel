<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriModel extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $fillable = ['id', 'nama', 'harga', 'desk', 'kategori'];
    public function bukuTamus()
    {
        return $this->hasMany(BukuTamu::class, 'paket_salon_mobil', 'nama');
    }
}
