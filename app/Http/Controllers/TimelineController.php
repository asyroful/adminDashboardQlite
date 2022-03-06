<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Kategori;
use App\User;

class TimelineController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        return view('timeline.index', compact('pertanyaan'));
    }
}
