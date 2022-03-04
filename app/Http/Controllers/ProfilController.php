<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::where('users_id', Auth::user()->id)->first();
        return view('profil.index', compact('profil'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'bio' => 'required',
            'alamat' => 'required',
            'umur' => 'required'
        ]);

        $profil = Profil::find($id);
        
        $profil->bio = $request['bio'];
        $profil->alamat = $request['alamat'];
        $profil->umur = $request['umur'];
        $profil->users_id = Auth::user()->id;

        $profil->save();

        return redirect('/profil')->with('success', 'Data Berhasil Diubah!');
        
    }

}
