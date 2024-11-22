<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history'; 


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
