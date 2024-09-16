<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    // Menampilkan semua kamar
    public function index()
    {
        $simpankmr = Kamar::paginate(5);
        return view('kamar.index', compact('simpankmr'));
        
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama_kamar' => 'required',
            'jenis_kamar' => 'required',
            'status' => 'required',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Menyimpan data
        $kamar = new Kamar();
        $kamar->nama_kamar = $request->nama_kamar;
        $kamar->jenis_kamar = $request->jenis_kamar;
        $kamar->status = $request->status;
        if ($request->hasFile('images')) {
            $imageName = time() . '.' . $request->file('images')->getClientOriginalExtension();
            $request->file('images')->move(public_path('images'), $imageName);
            $kamar->images = $imageName;
        }
        $kamar->save();
    
        return redirect()->back()->with('success', 'Data kamar berhasil disimpan.');
    }
    



    // Mengubah status kamar ketika dipesan
    public function pesananMasuk($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->status = 'inactive'; // Status berubah menjadi 'inactive' ketika dipesan
        $kamar->save();

        return redirect()->back()->with('success', 'Kamar telah dipesan.');
    }

    // Mengubah status kamar ketika pesanan selesai
    public function pesananSelesai($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->status = 'active'; // Status kembali menjadi 'active' setelah pesanan selesai
        $kamar->save();

        return redirect()->back()->with('success', 'Kamar telah tersedia kembali.');
    }

    // Menghapus kamar
    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();
    
        return back()->with('success', 'Data Berhasil Di Dihapus!');
    }
    public function create()
    {
        return view('kamar.tambahkamar');
    }
    public function updateStatus($id)
    {
        $kamar = Kamar::find($id);
        if ($kamar) {
            $kamar->status = 'Tidak Tersedia'; // Mengubah status menjadi 'Tidak Tersedia'
            $kamar->save(); // Menyimpan perubahan ke database
            return redirect()->back()->with('success', 'Status kamar telah diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Kamar tidak ditemukan.');
        }
    }
    public function updateStatusToAvailable($id)
{
    $kamar = Kamar::find($id);
    if ($kamar) {
        $kamar->status = 'Tersedia'; // Atur status menjadi 'Tersedia'
        $kamar->save();
        return redirect()->back()->with('success', 'Status kamar telah diperbarui menjadi Tersedia.');
    }
    return redirect()->back()->with('error', 'Kamar tidak ditemukan.');
}


}
