<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $fillable = ['id_outlet','nm_outlet','alamat_outlet','no_outlet'];
    protected $table = 'outlet';
    public $timestamps = false;
}
