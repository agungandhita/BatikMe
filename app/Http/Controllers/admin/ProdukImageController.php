<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukImage;
use App\Repositories\SaveImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukImageController extends Controller
{

    private $saveImage;

    public function __construct(){
        $this->saveImage = new SaveImages;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = ProdukImage::with('produk')->first();




        $produk = Produk::with('produkImage', 'kategori')->get();


        return view('admin.gambar.gambar', [
            'data' => $produk,
            'title' => 'gambar produk',
            'gambar' => ProdukImage::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $edit = Produk::with('produkImage', 'kategori')->where('produk_id', $id)->first();




        return view('admin.gambar.edit', [
            'data' => $edit,
            'produk_id'=> $id

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        


        $cek = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageData = $request->image;

        $extension = $imageData->getClientOriginalExtension();
        $name = hash('sha256', time()) . '.' . $extension;
        $imageData->move('produk', $name);

        $image = $name;

        ProdukImage::create([
            'produk_id'=> $id,
            'image' => $image,
            'updated_at' => null,

        ]);

        return redirect()->back();

      






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukImage  $produkImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukImage $produkImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukImage  $produkImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukImage $id)
    {
        $gambar = $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukImage  $produkImage
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukImage $id, Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'image' => 'required'
        ]);

        if($request->has('image')){
            $image = $this->saveImage->updateImageSingle($request->image,'produk',$id->image);
        }else{
            $image = $id->image;
        }
        
        $id->update([
            'image' => $image,
            'user_updated' => Auth::id()

        ]);

        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukImage  $produkImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukImage $produkImage, $id)
    {
        $data = ProdukImage::where('gambarproduk_id', $id)->pluck('image')->first();

        $update = ProdukImage::where('gambarproduk_id',$id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true
        ]);

        if ($update) {
            $delete = ProdukImage::find($id)->delete();
            if ($delete) {
                $storage = public_path('produk/' . $data);
                unlink($storage);
            }
        }



        return redirect('/gambar/produk')->with('success', 'Berhasil menghapus gambar');
    }
}
