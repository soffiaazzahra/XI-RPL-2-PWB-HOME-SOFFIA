<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    use HasFactory;
     protected $table = 'petugass';
     protected $primaryKey = 'id_petugas';
     protected $fillable = [
       'username', 'password', 'nama_petugas', 'level'
     ];
}
