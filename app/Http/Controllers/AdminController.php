<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $dataPenyakit = Penyakit::count();
        $dataGejala = Gejala::count();
        $dataPasien = Diagnosa::count();
        return view('admin.index', compact([
            'dataPenyakit',
            'dataGejala',
            'dataPasien'
        ]));
    }
}
