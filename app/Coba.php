<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    //
    protected $table='coba';
    protected $fillable=['id','nama','kelas','jurusan','jenis_kelamin'];
    protected $visible=['id','nama','kelas','jurusan','jenis_kelamin'];
    public $timestamps=true;
}
