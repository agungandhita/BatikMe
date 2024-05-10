<?php

namespace App\Http\Controllers\admin;

use App\Models\Size;
use App\Models\Produk;
use App\Models\Category;
use App\Models\ProdukImage;
use Illuminate\Http\Request;
use App\Repositories\SaveImages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{

    private $saveImage;

    public function __construct()
    {
        $this->saveImage = new SaveImages;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produk::with(['kategori', 'produkImage'])->latest();
        $item = ProdukImage::with('produk')->latest();

        $kategori = Category::where('kategori_id', request('jenis'))->first();



        if (request('search')) {
            $data->where('name', 'like', '%' . request('search') . '%');
        }



        return view('admin.produk.index', [
            'data' => $data->paginate(10),
            'title' => 'produk',
            'kategori' => Category::get(),
            'gambar' => ProdukImage::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'nama_produk' => 'required|max:255',
            'deskripsi' => 'required',
            'model' => 'required',
            'size.*' => 'required',
            'berat' => 'required',
            'kategori' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required',
        ]);

        $image = array();
        $no = 1;

        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = hash('sha256', time()) . $no++ . '.' . $extension;
                $file->move('produk', $name);
                $image[] = $name;
            }
        }
        if ($image !== null) {
            $produk = Produk::create([
                'nama_produk' => $request->nama_produk,
                'kategori_id' => $cek['kategori'],
                'deskripsi' => $request->deskripsi,
                'model' => $request->model,
                'harga' => $request->harga,
                'berat' => $request->berat,
                'user_created' => Auth::id(),
                'created_at' => now(),
                'updated_at' => null
            ]);
        }

        if ($produk) {
            foreach ($request->size as $ukuran) {
                Size::create([
                    'produk_id' => $produk->produk_id,
                    'size' => $ukuran,
                    'user_created' => Auth::id(),
                    'created_at' => now(),
                    'updated_at' => null
                ]);
            }

            foreach ($image as $gambar) {
                ProdukImage::create([
                    'produk_id' => $produk->produk_id,
                    'image' => $gambar,
                    'user_created' => Auth::id(),
                    'created_at' => now(),
                    'updated_at' => null
                ]);
            }

        }


        return redirect('/admin/produk')->with('success', 'successful additional to the Produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cek = $request->validate([
            'nama_produk' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
        ]);


        Produk::find($id)->update([
            'nama_produk' => $cek['nama_produk'],
            'deskripsi' => $cek['deskripsi'],
            'harga' => $cek['harga'],
            'kategori_id' => $cek['kategori'],
            'updated_at' => now(),
            'user_updated' => Auth::id()
        ]);

        return redirect('/admin/produk');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk, $id)
    {
        $data = Produk::with('produkImage')->where('produk_id', $id)->first();
        $image = $data->produkImage;
        ProdukImage::where('produk_id', $id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true,
            'deleted_at' => now(),
            'user_deleted' => Auth::id()

        ]);

        $update = Produk::where('produk_id', $id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted_at' => now(),
            'deleted' => true,
            'user_deleted' => Auth::id()
        ]);

        if ($update) {
            $delete = ProdukImage::where('produk_id', $id)->delete();
            if ($delete) {
                foreach ($image as $cek) {

                    $storage = public_path('produk/' . $cek->image);
                    unlink($storage);
                }
            }
        }



        return redirect('/admin/produk')->with('success', 'Delete successful to the Guide');
    }
}
