<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Tiket;
use Illuminate\Http\Request;

class homeController extends Controller
{   
   public function index()
    {
        $totalPelanggan = Pelanggan::count();
        $totalTiket = Tiket::sum('jumlah');
        $totalPendapatan = Tiket::sum('total_harga');
    
        return view('dashboard.home', compact('totalPelanggan', 'totalTiket', 'totalPendapatan'));
    }
    
}
