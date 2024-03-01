<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::latest();

        if (request('search')) {
            $data = $data->where('name', 'LIKE', '%' . request('search') . '%');
        }
        return view('admin.user.index', [
            'data' => $data->paginate(10),
            'title' => 'admin user',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek = $request->validate([
            'username' => 'required|max:255',
            'image' => 'required|max:2048',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required',
            'alamat' => 'required',
            'no_tlpn' => 'required',
            'role' => 'required',
        ]);

        $cek['password'] = bcrypt($cek['password']);



        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('ft_user', $name);
        }


        User::create([
            'username' => $cek['username'],
            'image' => $name,
            'email' => $cek['email'],
            'password' => $cek['password'],
            'alamat' => $cek['alamat'],
            'no_tlpn' => $cek['no_tlpn'],
            'role' => $cek['role'],
            'user_created' => Auth::id(),

        ]);
        return redirect('/profile')->with('toast_success', 'Your operation was successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $cek = $request->validate([
            'username' => 'required|max:255',
            'image' => 'required|max:2048',
            'email' => 'required|email:rfc,dns|unique:users',
            'alamat' => 'required',
            'no_tlpn' => 'required',
            'role' => 'required',
        ]);


        $img = User::where('user_id', $id)->pluck('image')->first();

        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.'  . $extension;
            $up = $files->move('ft_user', $name);

            if ($up) {
                $storage = public_path('ft_user/' . $img);
                if (File::exists($storage)) {
                    unlink($storage);
                }
            }
        } else {
            $name = $img;
        }


        User::find($id)->update([
            'username' => $cek['username'],
            'image' => $name,
            'email' => $cek['email'],
            'alamat' => $cek['alamat'],
            'no_tlpn' => $cek['no_tlpn'],
            'role' => $cek['role'],
            'user_updated' => Auth::id(),
        ]);


        return redirect('/profile')->with('toast_success', 'Your operation was successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {

        $data = User::where('user_id', $id)->pluck('image')->first();

        $update = User::where('user_id', $id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true
        ]);

        if ($update) {
            $delete = User::find($id)->delete();
            if ($delete) {
                $storage = public_path('ft_user/' . $data);
                unlink($storage);
            }
        }



        return redirect('/profile')->with('success', 'Delete successful to the Guide');
    }
}
