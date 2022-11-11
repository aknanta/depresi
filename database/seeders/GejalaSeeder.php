<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gejala::insert([
            [
                'kode_gejala' => 'G1',
                'nama_gejala' => 'Anda sering merasa sedih'
            ],
            [
                'kode_gejala' => 'G2',
                'nama_gejala' => 'Anda tidak merasa percaya diri'
            ],
            [
                'kode_gejala' => 'G3',
                'nama_gejala' => 'Merasa hidup anda adalah kegagalan'
            ],
            [
                'kode_gejala' => 'G4',
                'nama_gejala' => 'Bosan sehingga tidak puas apa yang dinikmati'
            ],
            [
                'kode_gejala' => 'G5',
                'nama_gejala' => 'Merasa bersalah akan sesuatu'
            ],
            [
                'kode_gejala' => 'G6',
                'nama_gejala' => 'Merasa seakan sedang dihukum'
            ],
            [
                'kode_gejala' => 'G7',
                'nama_gejala' => 'Kecewa pada diri sendiri'
            ],
            [
                'kode_gejala' => 'G8',
                'nama_gejala' => 'Merasa lebih buruk dari orang lain'
            ],
            [
                'kode_gejala' => 'G9',
                'nama_gejala' => 'Berpikiran untuk bunuh diri'
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Sering menangis'
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Terbiasa marah dalam suatu hal'
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Tidak memiliki minat bergaul dengan orang lain'
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Sulit mengambil keputusan'
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Merasa penampilan anda buruk'
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Tidak dapat melakukan pekerjaan dengan baik'
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Tidak dapat tidur nyenyak seperti biasanya'
            ],
            [
                'kode_gejala' => 'G17',
                'nama_gejala' => 'Merasa lebih lelah melakukan sebuah aktivitas'
            ],
            [
                'kode_gejala' => 'G18',
                'nama_gejala' => 'Nafsu makan tidak terjaga'
            ],
            [
                'kode_gejala' => 'G19',
                'nama_gejala' => 'Kehilangan berat badan > 5kg'
            ],
            [
                'kode_gejala' => 'G20',
                'nama_gejala' => 'Merasa cemas'
            ],
            [
                'kode_gejala' => 'G21',
                'nama_gejala' => 'Perubahan minat terhadap seksualitas'
            ],

        ]);
    }
}
