<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function index(){
        return view('admin.pasien', [
            'pasien' => DB::table('diagnosas')->paginate('20')
        ]);
    }
}
