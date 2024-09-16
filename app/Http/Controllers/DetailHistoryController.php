<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class DetailHistoryController extends Controller
{
    public function show($id)
    {
        $detailhistory = History::find($id);
    
        if (!$detailhistory) {
            // Jika tidak ditemukan, Anda bisa mengarahkan ke halaman lain atau menampilkan pesan kesalahan
            return redirect()->route('pemesanan.detailhistory')->with('error', 'Data tidak ditemukan');
        }
    
        return view('pemesanan.detailhistory', compact('detailhistory'));
    }
}
