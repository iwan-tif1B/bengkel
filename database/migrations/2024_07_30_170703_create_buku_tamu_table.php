<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku_tamu', function (Blueprint $table) {
            $table->string('id_user')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('tipe_mobil')->nullable();
            $table->string('tipe_motor')->nullable();
            $table->string('pake_salon_mobil')->nullable();
            $table->string('paket_salon_motor')->nullable();
            $table->date('tanggal');
            $table->string('gambar')->nullable();
            $table->string('upload')->nullable();
            $table->string('Bukti_Tf')->nullable();
            $table->string('status')->nullable();
            $table->integer('nomor_antrian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_tamu');
    }
};
