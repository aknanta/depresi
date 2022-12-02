<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gejala', [
            'gejala' => DB::table('gejalas')->paginate('15')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-gejala');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required'
        ]);
        $gejala = new Gejala;
        $gejala->kode_gejala = $request->kode_gejala;
        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->save();
        return redirect()->to('/admin/gejala');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = Gejala::findOrFail($id);
        return view('admin.edit-gejala', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required'
        ]);

        $gejala = Gejala::findOrFail($id);
        $gejala->kode_gejala = $request->kode_gejala;
        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->save();
        return redirect()->to('/admin/gejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();
        return redirect()->to('/admin/gejala/');
    }
}
