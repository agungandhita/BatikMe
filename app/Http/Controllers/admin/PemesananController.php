<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        return view('admin.data.index');
    }

    public function pembayaran() {
        return view('admin.pembayaran.index');
    }
}
