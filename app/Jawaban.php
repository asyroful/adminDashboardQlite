<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "jawaban";
    protected $fillable = ['jawaban', 'gambar', 'users_id', 'pertanyaan_id'];

    public $timestamps = false;
}
