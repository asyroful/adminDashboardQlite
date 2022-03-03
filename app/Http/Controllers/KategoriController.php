<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    public function create() {
        return view('kategori.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kategori'
        ]);
        $query = DB::table('kategori')->insert([
            "nama" => $request["nama"]
        ]);
        return redirect('/kategori')->with('success', 'Data Berhasil Dibuat');
    }
    
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('kategori.index', compact('kategori'));
    }

    public function show($id)
    {
        $post = DB::table('kategori')->where('id', $id)->first();
        return view('kategori.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('kategori')->where('id', $id)->first();
        return view('kategori.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kategori'
        ]);
        $query = DB::table('kategori')
                    ->where('id', $id)
                    ->update([
                        'nama' => $request['nama']
                    ]);
        return redirect('/kategori')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {
        $query = DB::table('kategori')->where('id', $id)->delete();
        return redirect('/kategori')->with('success', 'Data Berhasil Dihapus');
    }
}
