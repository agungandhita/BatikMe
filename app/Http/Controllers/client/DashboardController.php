<?php

namespace App\Http\Controllers\client;

use App\Models\Produk;
use App\Models\Category;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $data = Category::latest()->get();

        $produk = Category::with(['produk.produkimage' => function ($tes) {
            $tes->take(4);
        }]);

        if(request('kategori')){
            $produk->where('kategori_id', request('kategori'));
        }

        $tes = Produk::with(['produkImage', 'size'])->withSum('size', 'qty')->get();

        $banner = Dashboard::latest()->get();

        $cek = Berita::latest()->get();




        return view('client.home.index', compact('data'), [
            'data' => $data,
            'produk' => $produk->get(),
            'tes' => $tes,
            'kategori' => $produk->get(),
            'gambar' => $banner,
            'berita' => $cek
            
            
        ]);
    }

    

   
}
