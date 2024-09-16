<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pemesan;
use App\Models\Kamar;
use App\Models\History;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('pemesanan.pemesanan');
    }

    public function create()
    {
        // Hanya mengambil kamar dengan status 'tersedia'
        $kamars = Kamar::where('status', 'tersedia')->get(); 
        return view('pemesanan.tambahdata', compact('kamars'));
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:15',
            'tglmasuk' => 'required|date',
            'tglkeluar' => 'required|date|after:tglmasuk',
            'total_pembayaran' => 'required|numeric',
            'no_kamar' => 'required|string|exists:kamars,nama_kamar', // validasi no_kamar harus ada di tabel kamar
            'admin' => 'required|string|max:255',
        ]);
    
        // Simpan data pemesanan
        $pemesanan = new Pemesan();
        $pemesanan->nama_pemesan = $request->input('nama_pemesan');
        $pemesanan->alamat = $request->input('alamat');
        $pemesanan->nohp = $request->input('nohp');
        $pemesanan->tglmasuk = $request->input('tglmasuk');
        $pemesanan->tglkeluar = $request->input('tglkeluar');
        $pemesanan->total_pembayaran = $request->input('total_pembayaran');
        $pemesanan->no_kamar = $request->input('no_kamar');
        $pemesanan->admin = $request->input('admin');
        $pemesanan->save();
    
        // Update status kamar menjadi 'tidak tersedia'
        $kamar = Kamar::where('nama_kamar', $request->input('no_kamar'))->first();
        if ($kamar) {
            $kamar->status = 'tidak tersedia';
            $kamar->save();
        } else {
            return redirect()->back()->with('error', 'Kamar tidak ditemukan.');
        }
    
        return redirect()->back()->with('success', 'Data pemesanan berhasil disimpan.');
    }
    
    

    // dd($request->all());

    
    public function show($id)
    {
        $print = Pemesan::find($id);
    
        if (!$print) {
            // Jika tidak ditemukan, Anda bisa mengarahkan ke halaman lain atau menampilkan pesan kesalahan
            return redirect()->route('pemesanan.invoice')->with('error', 'Data tidak ditemukan');
        }
    
        return view('pemesanan.invoice', compact('print'));
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
    return view('pemesanan.detail', ['simpanDt' => $simpanDt]);
}
    // Di PemesananController
    public function simpanDt(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'tglmasuk' => 'required|date',
            'tglkeluar' => 'required|date',
            'total_pembayaran' => 'required|numeric',
            'no_kamar' => 'required|string',
            'admin' => 'required|string|max:255',
        ]);
    
        // Simpan data pemesanan
        Pemesan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'tglmasuk' => $request->tglmasuk,
            'tglkeluar' => $request->tglkeluar,
            'total_pembayaran' => $request->total_pembayaran,
            'no_kamar' => $request->no_kamar,
            'admin' => $request->admin,
        ]);
    
        // Perbarui status kamar menjadi tidak tersedia
        $kamar = Kamar::where('nama_kamar', $request->no_kamar)->first();
        if ($kamar) {
            $kamar->status = 'tidak tersedia';
            $kamar->save();
        }
    
        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data pemesanan berhasil disimpan!');
    }
    


}

