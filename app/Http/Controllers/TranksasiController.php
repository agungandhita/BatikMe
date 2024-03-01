<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTranksasiRequest;
use App\Http\Requests\UpdateTranksasiRequest;
use App\Models\Tranksasi;

class TranksasiController extends Controller
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
     * @param  \App\Http\Requests\StoreTranksasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTranksasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tranksasi  $tranksasi
     * @return \Illuminate\Http\Response
     */
    public function show(Tranksasi $tranksasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tranksasi  $tranksasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Tranksasi $tranksasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTranksasiRequest  $request
     * @param  \App\Models\Tranksasi  $tranksasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTranksasiRequest $request, Tranksasi $tranksasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tranksasi  $tranksasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tranksasi $tranksasi)
    {
        //
    }
}
