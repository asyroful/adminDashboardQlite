<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JawabanController extends Controller
{
    public function create() {
        return view('jawaban.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:jawaban'
        ]);
        $query = DB::table('jawaban')->insert([
            "nama" => $request["nama"],
            'gambar' => $request['gambar']
        ]);
        return redirect('/jawaban')->with('success', 'Data Berhasil Dibuat');
    }
    
    public function index()
    {
        $jawaban = DB::table('jawaban')->get();
        return view('jawaban.index', compact('jawaban'));
    }

    public function show($id)
    {
        $post = DB::table('jawaban')->where('id', $id)->first();
        return view('jawaban.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('jawaban')->where('id', $id)->first();
        return view('jawaban.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:jawaban'
        ]);
        $query = DB::table('jawaban')
                    ->where('id', $id)
                    ->update([
                        'nama' => $request['nama'],
                        'gambar' => $request['gambar']
                    ]);
        return redirect('/jawaban')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {
        $query = DB::table('jawaban')->where('id', $id)->delete();
        return redirect('/jawaban')->with('success', 'Data Berhasil Dihapus');
    }
}
