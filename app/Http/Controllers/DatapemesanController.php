<?php

namespace App\Http\Controllers;
use App\Models\Pemesan;
use App\Models\Kamar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatapemesanController extends Controller
{
    public function index()
    {
        $simpanDt = Pemesan::paginate(10);
        return view('pemesanan.datapemesanan', compact('simpanDt'));
    }
    public function edit($id)
    {
        $dt = Pemesan::findOrFail($id);

        return view('pemesanan.editdata', compact('dt'));
}
public function update(Request $request ,$id)
{
    $dt = Pemesan::findOrFail($id);
    $dt->update($request->all());
    return redirect('tambahdata')->with('success', 'Data Berhasil Di Update!');
}
public function destroy($id)
{
    // Temukan pemesanan berdasarkan id
    $pemesanan = Pemesan::findOrFail($id);

    // Ambil kamar terkait menggunakan relasi
    $kamar = Kamar::where('nama_kamar', $pemesanan->no_kamar)->first();

    // Hapus pemesanan
    $pemesanan->delete();

    // Jika kamar ditemukan, ubah statusnya menjadi 'Tersedia'
    if ($kamar) {
        $kamar->status = 'Tersedia';
        $kamar->save();
    }

    return redirect()->back()->with('success', 'Pemesanan Berhasil diHapus');
}



}