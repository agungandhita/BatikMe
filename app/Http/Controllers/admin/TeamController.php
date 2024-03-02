<?php

namespace App\Http\Controllers\admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::latest();

        if (request('search')) {
            $data = $data->where('name', 'LIKE', '%' . request('search') . '%');
        }

        return view('admin.team.index', [
            'data' => $data->paginate(10),
            'title' => 'team'
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
            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'profil' => 'required',
            'image' => 'required|max:2048',
        ]);



        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('image', $name);
        }


        Team::create([
            'nama' => $cek['nama'],
            'jabatan' => $cek['jabatan'],
            'profil' => $cek['profil'],
            'image' => $name,
            'user_created' => Auth::id(),
            'created_at' => now(),
            'updated_at' => null


        ]);


        return redirect('/tean')->with('success', 'successful additional to the Team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team, $id)
    {
        $validasi = $request->validate([

            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'profil' => 'required',
            'image' => 'required|max:2048',
        ]);

        $img = Team::where('team_id', $id)->pluck('image')->first();

        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.'  . $extension;
            $up = $files->move('image', $name);

            if ($up) {
                $storage = public_path('image/' . $img);
                if (File::exists($storage)) {
                    unlink($storage);
                }
            }
        } else {
            $name = $img;
        }


        Team::find($id)->update([
            'nama' => $validasi['nama'],
            'jabatan' => $validasi['jabatan'],
            'profil' => $validasi['profil'],
            'image' => $name,
            'user_updated' => Auth::id()

        ]);


        return redirect('/team')->with('success', 'update successful to the Team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team, $id)
    {
        $data = Team::where('team_id', $id)->pluck('image')->first();

        $update = Team::where('team_id',$id)->update([
            'user_deleted' => auth()->user()->user_id,
            'deleted' => true
        ]);

        if ($update) {
            $delete = Team::find($id)->delete();
            if ($delete) {
                $storage = public_path('image/' . $data);
                unlink($storage);
            }
        }



        return redirect('/team')->with('success', 'Delete successful to the Guide');
    }
}
