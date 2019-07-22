<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panti extends Model
{
    protected $table = 'panti';
    protected $fillable = ['id','nik_user', 'nik_pengurus', 'nama', 'lat_', 'long_','butuh_fasilitas', 'jumlah_pengurus', 'nama_pimpinan', 'kontak', 'email', 'sosmed', 'status_id'];
}
