<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan;
use App\Kategori;


class PertanyaanController extends Controller
{
    public function create() {
        $kategori = Kategori::all();
        return view('pertanyaan.create', compact('kategori'));
    }

    
    public function store(Request $request)
    {
      
        $request->validate([
            'pertanyaan' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg',
            'kategori_id' => 'required',
        ]);

        
        $fileName = time() . '.' . $request->gambar->extension();

        $pertanyaan = new Pertanyaan;

        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->gambar = $fileName;
        $pertanyaan->kategori_id = $request->kategori_id;
        $pertanyaan->users_id = $request->user_id;

        $pertanyaan->save();

        $request->gambar->move(public_path('uploads'), $fileName);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Disimpan!');
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
                        'gambar' => $request['gambar'],
                    ]);
        return redirect('/pertanyaan')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Data Berhasil Dihapus');
    }
}
