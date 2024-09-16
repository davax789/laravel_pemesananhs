<?php

namespace App\Http\Controllers;
use App\Models\Pemesan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function show($id)
    {
        $detail = Pemesan::find($id);
    
        if (!$detail) {
            // Jika tidak ditemukan, Anda bisa mengarahkan ke halaman lain atau menampilkan pesan kesalahan
            return redirect()->route('pemesanan.datapemesanan')->with('error', 'Data tidak ditemukan');
        }
    
        return view('pemesanan.datapemesanan', compact('detail'));
    }
    // Di PemesananController
public function details($id)
{
    // Ambil data pemesanan berdasarkan ID
    $simpanDt = Pemesan::find($id);

    // Periksa apakah data ditemukan
    if (!$simpanDt) {
        return redirect()->back()->with('error', 'Data tidak ditemukan');
    }

    // Pass data ke view
    return view('details', ['simpanDt' => $simpanDt]);
}

}
