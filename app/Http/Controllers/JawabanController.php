<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jawaban;
use App\Pertanyaan;

class JawabanController extends Controller
{
    public function create() {
        $pertanyaan = Pertanyaan::all();
        return view('jawaban.create', compact('pertanyaan'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'jawaban' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg',
            'pertanyaan_id' => 'required',
        ]);
        
        $fileName = time() . '.' . $request->gambar->extension();

        $jawaban = new Jawaban;

        $jawaban->jawaban = $request->jawaban;
        $jawaban->gambar = $fileName;
        $jawaban->users_id = $request->user_id;
        $jawaban->pertanyaan_id = $request->pertanyaan_id;

        $jawaban->save();

        $request->gambar->move(public_path('uploads'), $fileName);
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
            'jawaban' => 'required'
        ]);
        $query = DB::table('jawaban')
                    ->where('id', $id)
                    ->update([
                        'jawaban' => $request['jawaban'],
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
