<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TimelineController extends Controller
{
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('timeline.index', compact('pertanyaan'));
    }
}
