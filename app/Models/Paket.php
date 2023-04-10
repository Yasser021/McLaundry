<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $fillable = ['id_paket','id_outlet','nm_paket','jenis','harga'];
    protected $table = 'paket';
    public $timestamps = false;
}
