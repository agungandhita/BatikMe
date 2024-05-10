<?php

namespace App\Http\Controllers\client;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        $data = Category::latest()->get();

        $produk = Category::with('produk.produkimage')->get();

        $tes = Produk::with(['produkImage', 'size'])->withSum('size', 'qty')->get();


        return view('client.home.index', [
            'data' => $data,
            'produk' => $produk,
            'tes' => $tes
            
        ]);
    }
}
