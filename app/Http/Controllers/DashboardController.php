<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Pemesan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPesanan = Pemesan::count();
    
        // Menghitung jumlah data dari model History
        $totalHistory = History::count();
        
        // Mengirim data ke view
        return view('home', [
            'totalPesanan' => $totalPesanan,
            'totalHistory' => $totalHistory
        ]);
    }
}
