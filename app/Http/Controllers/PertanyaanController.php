<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create() {
        return view('pertanyaan.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            "pertanyaan" => $request["nama"],
            "gambar" => $request["gambar"]
        ]);
        return redirect('/pertanyaan')->with('success', 'Data Berhasil Dibuat');
    }
    
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($id)
    {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required'
        ]);
        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'pertanyaan' => $request['pertanyaan'],
                        'gambar' => $request['gambar']
                    ]);
        return redirect('/pertanyaan')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Data Berhasil Dihapus');
    }
}
