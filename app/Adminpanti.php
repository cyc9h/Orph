<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adminpanti extends Model
{
    protected $table = 'admin_panti';
    protected $fillable = ['nik','nik_user', 'nama','tempat_lahir', 'tgl_lahir','jabatan','jkel', 'alamat','no_hp', 'foto'];
}
