<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history'; // Pastikan nama tabel sesuai dengan tabel di database

    // Jika Anda tidak ingin mengizinkan pengisian massal untuk semua kolom
    // pastikan untuk mendefinisikan atribut yang dapat diisi
    protected $fillable = [
        'nama_pemesan',
        'alamat',
        'nohp',
        'tglmasuk',
        'tglkeluar',
        'total_pembayaran',
        'no_kamar',
        'admin',
    ];
}
