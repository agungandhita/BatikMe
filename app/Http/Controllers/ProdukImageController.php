<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdukImageRequest;
use App\Http\Requests\UpdateProdukImageRequest;
use App\Models\ProdukImage;

class ProdukImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProdukImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukImageRequest $request)
    {
        //
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
    public function edit(ProdukImage $produkImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukImageRequest  $request
     * @param  \App\Models\ProdukImage  $produkImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdukImageRequest $request, ProdukImage $produkImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukImage  $produkImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukImage $produkImage)
    {
        //
    }
}
