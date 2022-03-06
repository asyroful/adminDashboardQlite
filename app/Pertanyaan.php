<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $fillable = ['pertanyaan', 'gambar', 'users_id', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
