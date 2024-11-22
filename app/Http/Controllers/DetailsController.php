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
            return redirect()->route('pemesanan.datapemesanan')->with('error', 'Data tidak ditemukan');
        }
    
        return view('pemesanan.datapemesanan', compact('detail'));
    }
public function details($id)
{
    $simpanDt = Pemesan::find($id);

    if (!$simpanDt) {
        return redirect()->back()->with('error', 'Data tidak ditemukan');
    }

    return view('details', ['simpanDt' => $simpanDt]);
}

}
