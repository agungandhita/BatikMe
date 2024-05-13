<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {

        $user = Auth::user();


        return view('client.profile.index',['data' => $user]);
    }

    public function bayar(){
        return view ('client.profile.cek');
    }
}
