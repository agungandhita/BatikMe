<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\interface\AuthInterface;
use Exception;

class AuthRepository implements AuthInterface
{
    public function register($data)
    {
        
    }

    public function save($data)
    {
        $cek = User::where("email", $data->email)->get();

        if ($cek->count() > 0) {
            return redirect()->back();
        }
        if (User::get()->count() > 0) {
            $role = 'client';
        } elseif (User::get()->count() < 1) {
            $role = 'admin';
        }

        $password = bcrypt($data->password);
        
        $save = User::create([
            'username' => $data->username,
            'password' => $password,
            'email' => $data->email,
            'role' => $role
        ]);

        try{
            return redirect('/login')->with('toast_success', 'Berhasil Mendaftar');
        }catch(Exception $e){
            return redirect()->back()->with('toast_error', 'Gagal Mendaftar');
        }
    }
}
