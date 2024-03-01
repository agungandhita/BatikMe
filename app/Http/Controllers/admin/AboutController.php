<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AboutUs::latest();

        if (request('search')) {
            $data = $data->where('name', 'LIKE', '%' . request('search') . '%');
        }

        return view('admin.about.index', [
            'data' => $data->paginate(10),
            'title' => 'about us'
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
            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'profil' => 'required',
            'image' => 'required|max:2048',
        ]);



        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('image', $name);
        }


        AboutUs::create([
            'nama' => $cek['nama'],
            'jabatan' => $cek['jabatan'],
            'profil' => $cek['profil'],
            'image' => $name,
            'user_created' => Auth::id(),
            'created_at' => now()


        ]);


        return redirect('/about')->with('success', 'successful additional to the Produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $aboutUs, $id)
    {
        $validasi = $request->validate([

            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'profil' => 'required',
            'image' => 'required|max:2048',
        ]);

        $img = AboutUs::where('aboutus_id', $id)->pluck('image')->first();

        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.'  . $extension;
            $up = $files->move('image', $name);

            if ($up) {
                $storage = public_path('image/' . $img);
                if (File::exists($storage)) {
                    unlink($storage);
                }
            }
        } else {
            $name = $img;
        }


        AboutUs::find($id)->update([
            'nama' => $validasi['nama'],
            'jabatan' => $validasi['jabatan'],
            'profil' => $validasi['profil'],
            'image' => $name,
            'user_updated' => Auth::id()

        ]);


        return redirect('/about')->with('success', 'update successful to the Driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUs, $id)
    {


        $data = AboutUs::where('aboutus_id', $id)->pluck('image')->first();

        $update = AboutUs::where('aboutus_id',$id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true
        ]);

        if ($update) {
            $delete = AboutUs::find($id)->delete();
            if ($delete) {
                $storage = public_path('image/' . $data);
                unlink($storage);
            }
        }



        return redirect('/about')->with('success', 'Delete successful to the Guide');
    }
}
