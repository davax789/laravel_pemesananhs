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
        $kamars = Kamar::where('status', 'tersedia')->get(); 
        return view('pemesanan.tambahdata', compact('kamars'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:15',
            'tglmasuk' => 'required|date',
            'tglkeluar' => 'required|date|after:tglmasuk',
            'total_pembayaran' => 'required|numeric',
            'no_kamar' => 'required|string|exists:kamar,nama_kamar', 
            'admin' => 'required|string|max:255',
        ]);
    
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
            return redirect()->route('pemesanan.invoice')->with('error', 'Data tidak ditemukan');
        }
    
        return view('pemesanan.invoice', compact('print'));
    }     

   
public function details($id)
{
    
    $simpanDt = Pemesan::find($id);

   
    if (!$simpanDt) {
        return redirect()->back()->with('error', 'Data tidak ditemukan');
    }

    return view('pemesanan.detail', ['simpanDt' => $simpanDt]);
}
 
    public function simpanDt(Request $request)
    {
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
    
  
        $kamar = Kamar::where('nama_kamar', $request->no_kamar)->first();
        if ($kamar) {
            $kamar->status = 'tidak tersedia';
            $kamar->save();
        }
    
       
        return redirect()->back()->with('success', 'Data pemesanan berhasil disimpan!');
    }
    


}

