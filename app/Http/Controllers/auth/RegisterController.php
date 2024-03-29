<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterSaveRequest;
use App\Models\User;
use App\Repositories\RegisterRepository;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function index(){
      return view('auth.register');
  }

  public function store(Request $request){
      $validasi = $request->validate([
          'username' => 'required|max:255',
          'email' => 'required|email:rfc,dns|unique:users',
          'password' => 'required|confirmed|min:5|max:255',
      ]);


      $validasi['password'] = bcrypt($validasi['password']); 

      $proses = User::create([
          'username' => $validasi['username'],
          'email' => $validasi['email'],
          'password' => $validasi['password'],
          'updated_at' => null
      ]);

      if($proses){
          return redirect('/login')->with('toast_success', 'Registration successfull !!');

      }else{
          return redirect()->back()->with('warning', 'Registrasi Gagal');
      }

  }
    
}
