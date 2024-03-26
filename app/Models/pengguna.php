<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $table = "pengguna";
    protected $fillable = ["nama", "alamat", "asaluniv", "jurusan", "tglawal", "tglakhir", "status", "total_earnings", "file"];
}
