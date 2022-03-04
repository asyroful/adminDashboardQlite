<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';
    protected $fillable = ['bio', 'alamat', 'umur', 'users_id'];

    public $timestamps = false;
}
