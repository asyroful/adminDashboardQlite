<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = DB::table('profil')->get();
        return view('profil.index', compact('profil'));
    }
}
