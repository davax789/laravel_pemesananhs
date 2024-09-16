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
        // Temukan pesanan berdasarkan ID
        $pemesanan = Pemesan::find($id);
        
        if ($pemesanan) {
            // Simpan data pemesanan ke tabel history
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
    
            // Hapus data pemesanan dari tabel pemesan
            $pemesanan->delete();
    
            // Update status kamar menjadi 'tersedia'
            $kamar = Kamar::where('nama_kamar', $pemesanan->no_kamar)->first(); // Menggunakan $pemesanan->no_kamar
            if ($kamar) {
                $kamar->status = 'tersedia';
                $kamar->save();
            }
    
            // Redirect ke halaman daftar pemesanan dengan pesan sukses
            return redirect()->route('datapemesanan')->with('success', 'Pesanan berhasil diselesaikan dan dipindahkan ke history.');
        }
    
        // Redirect ke halaman daftar pemesanan dengan pesan error jika pesanan tidak ditemukan
        return redirect()->route('datapemesanan')->with('error', 'Pesanan tidak ditemukan.');
    }
    
    
    

    public function index()
    {
        $histori = History::orderBy('created_at', 'desc')->paginate(5);
        return view('history', compact('histori'));
    }
}
