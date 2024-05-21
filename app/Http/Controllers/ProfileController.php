<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index() {

        $user = Auth::user();


        return view('client.profile.index',['data' => $user]);
    }

    public function bayar(){
        return view ('client.profile.cek');
    }

    public function update(Request $request, $id)
    {


        $cek = $request->validate([
            'username' => 'required|max:255',
            'alamat' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required',

        ]);


        // $img = User::where('user_id', $id)->pluck('image')->first();

        // if ($files = $request->file('image')) {
        //     $extension = $files->getClientOriginalExtension();
        //     $name = hash('sha256', time()) . '.'  . $extension;
        //     $up = $files->move('ft_user', $name);

        //     if ($up) {
        //         $storage = public_path('ft_user/' . $img);
        //         if (File::exists($storage)) {
        //             unlink($storage);
        //         }
        //     }
        // } else {
        //     $name = $img;
        // }


        User::find($id)->update([
            'username' => $cek['username'],
            // 'image' => $name,
            'email' => $cek['email'],
            'alamat' => $cek['alamat'],
            'no_tlpn' => $cek['no_tlpn'],
            'user_updated' => Auth::id(),
        ]);


        return redirect('/user')->with('toast_success', 'Your operation was successful.');
    }
}