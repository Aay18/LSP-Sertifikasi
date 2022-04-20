<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KriteriaUnjukKerja extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'kriteria_unjuk_kerjas';
    protected $fillable = ['namaElemen','kriteriaUnjukKerja','foto'];
}
