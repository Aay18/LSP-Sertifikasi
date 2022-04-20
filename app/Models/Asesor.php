<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asesor extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'asesors';
    protected $fillable = ['namaLengkap','noRegistrasi','alamat','noHp','email','password'];
}
