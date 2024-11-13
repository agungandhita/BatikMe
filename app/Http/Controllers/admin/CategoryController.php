<?php

namespace App\Http\Controllers\admin;

use App\Models\Produk;
use App\Models\Category;
use App\Models\ProdukImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Size;
use GrahamCampbell\ResultType\Success;
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
        $data = Category::get();


        return view('admin.produk.kategori', [
            'data' => $data,
            'title' => 'produk',
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        if ($files = $request->file('gambar')) {
            $extension = $files->getClientOriginalExtension();
            
            $name = hash('sha256', time()) . '.' . $extension;
            
            $files->move(public_path('kategori'), $name);
        } else {
            $name = null; 
        }
        
        
        Category::create([
            'nama_kategori' => $request['nama_kategori'],
            'gambar' => $name, 
            'user_created' => Auth::id(),
            'created_at' => now(),
            'updated_at' => null
        ]);
    
        // Redirect dengan pesan sukses
        return redirect('/admin/kategori')->with('success', 'Berhasil menambahkan kategori');
    }
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {

        $img = Category::where('kategori_id', $id)->pluck('gambar')->first();

        if ($files = $request->file('gambar')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.'  . $extension;
            $up = $files->move('kategori', $name);

            if ($up) {
                $storage = public_path('kategori/' . $img);
                if (File::exists($storage)) {
                    unlink($storage);
                }
            }
        } else {
            $name = $img;
        }

        Category::where('kategori_id', $id);

        Category::find($id)->update([
            'nama_kategori' => $request['nama_kategori'],
            'gambar' => $name,
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
