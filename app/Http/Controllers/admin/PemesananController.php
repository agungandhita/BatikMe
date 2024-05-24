<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\User;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        return view('admin.data.index');
    }

    public function pembayaran() {
        $produk = Pemesanan::with(['produk' => function ($query) {
            $query->with('produkimage');
        }, 'user'])->get();



     

        return view('admin.pembayaran.index', [
            'data' => $produk
        ]);


    }


}
