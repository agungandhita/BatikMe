<?php

namespace App\Http\Controllers\admin;

use App\Models\Produk;
use App\Models\Category;
use App\Models\ProdukImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::latest();



        return view('admin.produk.kategori', [
            'data' => $data->paginate(10),
            'title' => 'produk',
        ]);
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
            'nama_kategori' => 'required|max:255',
        ]);

        Category::create([
            'nama_kategori' => $cek['nama_kategori'],
            'user_created' => Auth::id(),
            'created_at' => now(),
            'updated_at' => null
        ]);

        return redirect('/admin/kategori');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cek = $request->validate([
            'nama_kategori' => 'required|max:255',
        ]);

        Category::where('kategori_id', $id);

        Category::find($id)->update([
            'nama_kategori' => $cek['nama_kategori'],
            'user_created' => Auth::id(),
            'user_updated' => Auth::id(),
            'updated_at' => now()
        ]);

        return redirect('/admin/kategori')->with('success', 'berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $data = Category::where('kategori_id', $id)->first();

        $data->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true,
            'deleted_at' => now(),
            'user_deleted' => Auth::id()
        ]);

        $produk = Produk::where('kategori_id', $data->kategori_id)->get();
        foreach ($produk as $item) {
            $item->update([
                'user_deleted' => auth()->user()->user_id,
                'deleted' => true,
                'deleted_at' => now()
            ]);

            $produkImage = ProdukImage::where('produk_id', $item->produk_id)->get();

            foreach ($produkImage as $image) {
                $image->update([
                    'user_deleted' => auth()->user()->user_id,
                    'deleted' => true,
                    'deleted_at' => now()
                ]);

                $storage = public_path('produk/' . $image->image);
                if (File::exists($storage)) {
                    unlink($storage);
                }
            }

            $size = Size::where('produk_id', $item->produk_id)->get();
            foreach ($size as $cek) {
                $cek->update([
                    'user_deleted' => auth()->user()->user_id,
                    'deleted' => true,
                    'deleted_at' => now()
                ]);
            }
        }




        return redirect('/admin/kategori')->with('success', 'berhasil menghapus data');
    }
}
