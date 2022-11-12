<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyakit::insert([
            [
                'kode_penyakit' => 'P1',
                'nama_penyakit' => 'Depresi Ringan'
            ],
            [
                'kode_penyakit' => 'P2',
                'nama_penyakit' => 'Depresi Sedang'
            ],
            [
                'kode_penyakit' => 'P3',
                'nama_penyakit' => 'Depresi Berat'
            ],
        ]);
    }
}
