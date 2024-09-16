<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesan extends Model
{
    protected $table = "pemesanan";
    protected $fillable = [
        'id',
        'nama_pemesan',
        'alamat',
        'nohp',
        'tglmasuk',
        'tglkeluar',
        'total_pembayaran',
        'no_kamar',
        'admin'
    ];
}
