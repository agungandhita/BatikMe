<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            'nama_kategori' => 'required|max:255',
        ]);

        Category::create([
            'nama_kategori' => $cek['nama_kategori'],
            'user_created' => Auth::id(),
            'created_at' => now(),
            'updated_at' => null
        ]);

        return redirect('/produk/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
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
            'user_created' => Auth::id()
        ]);

        return redirect('/produk/kategori');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $data = Category::with('produk')->where('produk_id', $id)->first();

    }
}
