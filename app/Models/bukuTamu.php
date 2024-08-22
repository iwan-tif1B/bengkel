<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuTamu extends Model
{
    protected $table = 'buku_tamu';
    protected $primarykey = 'id_user';
    protected $fillable = ["id_user", "katalog", "nama", "id_user", "alamat", "tipe_mobil", "tipe_motor", "no_hp", "paket_salon_mobil", "paket_salon_motor", "tanggal", "gambar", "upload", "status", "nomor_antrian", "Bukti_Tf"];
    // Relasi dengan kategori
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    // kategori
    public function kategori()
    {
        return $this->belongsTo(kategoriModel::class, 'paket_salon_mobil', 'id');
    }

    // katalog
    public function katalogs()
    {
        return $this->belongsTo(katalog::class, 'katalog', 'id');
    }
}
