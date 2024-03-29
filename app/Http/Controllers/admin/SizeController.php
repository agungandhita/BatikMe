<?php

namespace App\Http\Controllers\admin;

use App\Models\Size;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //     $sizes = Produk::with('size')->get();

    //     return view('admin.produk.size', [
    //     'data' => $sizes,
    //     'title' => 'size dan stock'
    //     ]);
        

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $edit = Produk::with('size')->where('produk_id', $id)->first();
        
        $data = Size::where('produk_id', $id)->get();

        return view('admin.produk.size', [
            'data' => $data,
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
            'size' => 'required',
            'qty' => 'required'
        ]);

        Size::create([
            'produk_id' => $id,
            'size' => $request->size,
            'qty' => $request->qty,
            'updated_at' => null,
        ]);
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $id, )
    {
        $validate = $request->validate( [
            'qty' => 'required'
        ]);

        $id->update([
            'qty' => $request->qty,
            'user_updated' => Auth::id()

        ]);

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size, $id)
    {
        $update = Size::where('size_id', $id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true
        ]);

        if ($update) {
            Size::find($id)->delete();
        }
        return redirect()->back();

    }
}
