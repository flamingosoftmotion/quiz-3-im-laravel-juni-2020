<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{

    protected $table = 'artikel';
    protected $fillable = ['judul','isi','slug','tags'];
    protected $casts = ['tags' => 'array'];

}
