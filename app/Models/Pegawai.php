<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['id_pegawai','id_outlet','nm_pegawai','jk','no_telp'];
    protected $table = 'pegawai';
    public $timestamps = false;
}
