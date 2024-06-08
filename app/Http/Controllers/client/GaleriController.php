<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\ProdukImage;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index() {

        $data = ProdukImage::get()->all();

        return view('client.galeri.index', [
            'data' => $data
        ]);
    }
}
