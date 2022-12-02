<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    use HasFactory;
    protected $fillable = ['id_penyakit', 'id_gejala', 'bobot_nilai'];
    public $timestamps = false;
}
