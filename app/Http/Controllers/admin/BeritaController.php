<?php

namespace App\Http\Controllers\admin;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBeritaRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View as ViewContract;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $data = Berita::latest()->get();
    
        return view("admin.berita.berita", [
            'data' => $data,
            'title' => 'berita'
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view("admin.berita.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeritaRequest $request): RedirectResponse
    {
        // Proses file gambar jika ada
        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('image', $name);
        } else {
            $name = null; 
        }

        Berita::create([
            'judul' => $request->judul,
            'image' => $name,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
            'user_created' => Auth::id(),
            'created_at' => now(),
            'updated_at' => null
        ]);

        return redirect('/berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
   public function edit($id): ViewContract
{
    $berita = Berita::where('berita_id', $id)->first();

    return view('admin.berita.edit', [
        'data' => $berita,
        'title' => 'Edit Berita'
    ]);
}
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        

        $request->validate([
            'judul' => 'required|max:255',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required',
            'isi' => 'required',
        ]);

        $img = Berita::where('berita_id', $id)->pluck('image')->first();

        if($files=$request->file('image')){
            $extension=$files->getClientOriginalExtension();
            $name = hash('sha256',time()) . '.'  . $extension;
            $up = $files->move('image',$name);

            if($up){
                $storage = public_path('image/'.$img);
                if(File::exists($storage)){
                    unlink($storage);
                }
            }
        }else{
            $name = $img;
        }

        Berita::find($id)->update([
            'judul' => $request->judul,
            'image' => $name,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
            'user_updated' => Auth::id()
        ]);

        return redirect()->route('/berita');


    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $id)
    {
        $data = Berita::where('berita_id', $id)->pluck('image')->first();

        $update = Berita::where('berita_id',$id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true
        ]);

        if ($update) {
            $delete = Berita::find($id)->delete();
            if ($delete) {
                $storage = public_path('image/' . $data);
                unlink($storage);
            }
        }



        return redirect('/berita')->with('success', 'berhasil di hapus');
    }

    public function read(Berita $id)
    {
        $data = $id;

        return view('admin.berita.read',compact('data'));
    }

}
