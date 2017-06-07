<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
   	protected $table='pengguna';
    protected $fillable=['nama_lengkap','alamat','no_telp'];
    protected $visible=['nama_lengkap','alamat','no_telp'];
    public $timestamps =true;
}
