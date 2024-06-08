<?php

namespace App\Http\Controllers\admin;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dashboard::latest()->get();
        // dd($data);

        // dd($data);   

        return view('admin.baner.index',[
            'data' => $data
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        $imageData = $request->image;

        $extension = $imageData->getClientOriginalExtension();
        $name = hash('sha256', time()) . '.' . $extension;
        $imageData->move('dashboard', $name);

        $image = $name;

        Dashboard::create([
            'image' => $image,
            'updated_at' => null,

        ]);

        return redirect('/admin/dashboard')->with('success', 'berhasil upload gambar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard, $id)
    {
        $cek = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $img = Dashboard::where('dashboard_id', $id)->pluck('image')->first();

        $old = $img;
        $imageData = $request->image;

        if($request->hashfile('image')) {

            $baru = $request->file('image');
            $extension = $imageData->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $simpan = $baru->move('dashboard', $name);

            $cek['image'] = Storage::url($simpan);

            if($old) {
                Storage::delete($old);
             } else {
                $cek['image'] = $old;
             }

             Dashboard::find($id)->update([
                'image' => $cek['image'],
                'updated_at' => now(),
                'user_updated' => Auth::id()
             ]);

             return redirect('/manage/dashboard')->with('succes', 'berhasil mengupdate gambar');


        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
