<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rules;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = ['dataGejala' => Gejala::all()];
        return view('konsultasi-form', $datas);
    }

    public function showdata($data_diagnosa)
    {
        $dataDiagnosa = Diagnosa::find($data_diagnosa)->toArray();

        $dataTampilan = [
            'namaPasien' => $dataDiagnosa['nama_pasien'],
            'diagnosa' => json_decode($dataDiagnosa['diagnosa']),
            'solusi' => json_decode($dataDiagnosa['solusi'])
        ];

        return view('hasildiagnosa', $dataTampilan);
    }


    public function proses(Request $request)
    {
        $validateReq = $request->validate([
            'nama_pasien' => 'required',
        ]);

        $arrHasilUser = $request->input('resultGejala');

        if ($arrHasilUser == null) {
            return back()->withInput()->with('error', 'Anda belum memilih gejala');
        } else {

                foreach ($arrHasilUser as $key => $value) {
                    $dataPenyakit[$key] = Rules::where('kode_gejala', $value)
                        ->select('kode_penyakit')
                        ->get()
                        ->toArray();
                    foreach ($dataPenyakit[$key] as $a => $b) {
                        $resultData[$key]['daftar_penyakit'][$a] = $b['kode_penyakit'];
                    }
                    $dataNilaiDensitas[$key] = Rules::where('kode_gejala', $value)
                        ->select('bobot_nilai', 'kode_gejala')
                        ->get()
                        ->toArray();
                    $dataGejala[$key] = $dataNilaiDensitas[$key][0]['kode_gejala'];
                    $resultData[$key]['belief'] = $dataNilaiDensitas[$key][0]['bobot_nilai'];
                    $resultData[$key]['plausibility'] = 1 - $dataNilaiDensitas[$key][0]['bobot_nilai'];
                }
                $variableTampilan = $this->mulaiPerhitungan($resultData);
                foreach ($dataGejala as $key => $value) {
                    $variableTampilan['Gejala_Penyakit'][$key]['kode_gejala'] = $arrHasilUser[$key];
                    $variableTampilan['Gejala_Penyakit'][$key]['nama_gejala'] = $value;
                }
                $diagnosaSavedData = [
                    'nama_penyakit' => $variableTampilan['Nama_Penyakit']['nama_penyakit'],
                    'nilai_belief' => $variableTampilan['Nilai_Belief_Penyakit'],
                    'persentase_penyakit' => $variableTampilan['Persentase_Penyakit'],
                    'gejala_penyakit' => $variableTampilan['Gejala_Penyakit'],
                ];

                $diagnosa = new Diagnosa();
                $diagnosa->nama_pasien = $validateReq['nama_pasien'];
                $diagnosa->diagnosa = json_encode($diagnosaSavedData);
                $diagnosa->solusi = json_encode($variableTampilan['Solusi_Penyakit']);
                $diagnosa->save();
                $idDiagnosa = $diagnosa->id_diagnosa;

                return redirect('konsultasi-form/' . $idDiagnosa);

        }
    }

    public function mulaiPerhitungan($dataAcuan)
    {
        $x = 0;
        for ($i = 0; $i < count($dataAcuan); $i++) {
            $hasilKonversi[$i]['data'][0]['array'] = $dataAcuan[$i]['daftar_penyakit'];
            $hasilKonversi[$i]['data'][0]['value'] = $dataAcuan[$i]['belief'];
            $hasilKonversi[$i]['data'][1]['array'] = [];
            $hasilKonversi[$i]['data'][1]['value'] = $dataAcuan[$i]['plausibility'];

            $x++;
        }

        $result = $this->startingPoint(count($hasilKonversi) - 2, $hasilKonversi);

        $arrResult = [];
        foreach ($result['data'] as $key => $value) {
            $arrResult[$key] = $value['value'];
        }

        $indexMaxValue = array_search(max($arrResult), $arrResult);
        $nilaiBelief = round($result['data'][$indexMaxValue]['value'], 2);
        $persentase = (round($result['data'][$indexMaxValue]['value'], 2) * 100);

        $kodePenyakit = $result['data'][$indexMaxValue]['array'][0];
        $dataPenyakit = Penyakit::where('kode_penyakit', $kodePenyakit)
            ->select('nama_penyakit')
            ->get()
            ->toArray()[0];
        $dataSolusi = Penyakit::where('kode_penyakit', $kodePenyakit)
            ->select('solusi')
            ->get()
            ->toArray()[0];

        $jsonData = [
            'Nama_Penyakit' => $dataPenyakit,
            'Nilai_Belief_Penyakit' => $nilaiBelief,
            'Persentase_Penyakit' => $persentase,
            'Solusi_Penyakit' => $dataSolusi,
        ];

        return $jsonData;
    }


    public function startingPoint(int $jumlah, array $myData, $data = [], int $indeks = 0)
    {
        if (count($data) == 0) {
            $hasilAkhir = $this->kalkulatorPerhitungan($myData[$indeks], $myData[$indeks + 1]);
        } else {
            $hasilAkhir = $this->kalkulatorPerhitungan($data, $myData[$indeks + 1]);
        }
        if ($indeks < $jumlah) {
            return $this->startingPoint($jumlah, $myData, $hasilAkhir, $indeks + 1);
        } else {
            return $hasilAkhir;
        }
    }

    public function kalkulatorPerhitungan($array1, $array2)
    {
        $hasilAkhir['data'] = [];

        $hasilSementara = [];
        $z = 0;
        for ($x = 0; $x < count($array1['data']); $x++) {
            for ($y = 0; $y < count($array2['data']); $y++) {
                if (count($array1['data'][$x]['array']) != 0 && count($array2['data'][$y]['array']) != 0) {
                    $hasilSementara[$z]['array'] = json_encode(array_values(array_intersect($array1['data'][$x]['array'], $array2['data'][$y]['array'])));
                    if (count(json_decode($hasilSementara[$z]['array'])) == 0) {
                        $hasilSementara[$z]['status'] = 'Himpunan Kosong';
                    }
                } else {
                    $hasilSementara[$z]['array'] = json_encode(array_merge($array1['data'][$x]['array'], $array2['data'][$y]['array']));
                }
                $hasilSementara[$z]['value'] = $array1['data'][$x]['value'] * $array2['data'][$y]['value'];
                $z++;
            }
        }

        $pushArray = [];
        foreach ($hasilSementara as $hasil) {
            array_push($pushArray, $hasil['array']);
        }

        $pushArrayCat = [];
        foreach (array_count_values($pushArray) as $key => $value) {
            array_push($pushArrayCat, $key);
        }

        $tetapan = 0;
        foreach ($hasilSementara as $datahasil) {
            if (isset($datahasil['status']) && $datahasil['status'] == 'Himpunan kosong') {
                $tetapan += $datahasil['value'];
            }
        }

        $tetapan = 1 - $tetapan;

        $finalResult = [];
        for ($y = 0; $y < count($pushArrayCat); $y++) {
            $decode[$y] = json_decode($pushArrayCat[$y]);
            $finalResult[$y]['array'] = $decode[$y];
            $finalResult[$y]['value'] = 0;
            for ($x = 0; $x < count($hasilSementara); $x++) {
                $array[$x] = json_decode($hasilSementara[$x]['array']);
                if ($decode[$y] == $array[$x]) {
                    if (!isset($hasilSementara[$x]['status'])) {
                        $finalResult[$y]['value'] += $hasilSementara[$x]['value'];
                    }
                }
            }

            $finalResult[$y]['value'] = $finalResult[$y]['value'] / $tetapan;
        }

        for ($i = 0; $i < count($finalResult); $i++) {
            $hasilAkhir['data'][$i] = $finalResult[$i];
        }

        return $hasilAkhir;
    }
}
