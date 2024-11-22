<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Pemesan;
use App\Models\Kamar;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    public function selesai(Request $request, $id)
    {
        $pemesanan = Pemesan::find($id);
        
        if ($pemesanan) {
            $history = new History();
            $history->nama_pemesan = $pemesanan->nama_pemesan;
            $history->alamat = $pemesanan->alamat;
            $history->nohp = $pemesanan->nohp;
            $history->tglmasuk = $pemesanan->tglmasuk;
            $history->tglkeluar = $pemesanan->tglkeluar;
            $history->total_pembayaran = $pemesanan->total_pembayaran;
            $history->no_kamar = $pemesanan->no_kamar;
            $history->admin = $pemesanan->admin;
            $history->save();
    
            $pemesanan->delete();
    
            $kamar = Kamar::where('nama_kamar', $pemesanan->no_kamar)->first(); 
            if ($kamar) {
                $kamar->status = 'tersedia';
                $kamar->save();
            }
    
            return redirect()->route('datapemesanan')->with('success', 'Pesanan berhasil diselesaikan dan dipindahkan ke history.');
        }
    
        return redirect()->route('datapemesanan')->with('error', 'Pesanan tidak ditemukan.');
    }
    
    
    

    public function index()
    {
        $histori = History::orderBy('created_at', 'desc')->paginate(5);
        return view('history', compact('histori'));
    }

    
}
