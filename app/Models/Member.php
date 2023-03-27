<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['id_member','nm_member','alamat_member','jk','no_member'];
    protected $table = 'member';
    public $timestamps = false;
}
