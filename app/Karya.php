<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    protected $table = 'karya';
    protected $fillable = ['id','panti_id','judul','jenis','deskripsi','nama_anak','photo'];
}
