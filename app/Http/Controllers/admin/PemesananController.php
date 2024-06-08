<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        

        $barang = Pemesanan::with(['produk' => function ($query) {
            $query->with('produkimage');
        }, 'user'])->get();

        return view('admin.data.index', [
            'item' => $barang
        ]);
    }

    public function update(Request $request,Pemesanan $id) {
        
        $validate = $request->validate([
            'status' => 'required'
        ]);

        $id->update([
            'status' => $request->status
        ]);

        return redirect('/pembayaran')->with('success', 'berhasil update');
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
