<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    // Nama tabel yang terkait
    protected $table = 'kamar';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_kamar',
        'jenis_kamar',
        'status',
        'images'
        ];

    /**
     * Set status kamar ke 'inactive' saat dipesan
     *
     * @return void
     */
    public function setInactive()
    {
        $this->update(['status' => 'inactive']);
    }

    /**
     * Set status kamar ke 'active' saat pesanan selesai
     *
     * @return void
     */
    public function setActive()
    {
        $this->update(['status' => 'active']);
    }
}
