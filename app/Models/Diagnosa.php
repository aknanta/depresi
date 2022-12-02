<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $table = 'diagnosas';
    protected $primaryKey = 'id_diagnosa';
    protected $fillable = ['nama_pasien', 'diagnosa', 'solusi'];
}
