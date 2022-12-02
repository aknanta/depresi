<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-[#F4F4F4]">
    <x-header-index />
    <div class="xl:px-[150px] px-10">
        <h1 class="text-center">Hasil Diagnosa</h1>
        <div class="border border-solid max-w-screen bg-blue-500">
            <p class="p-3 text-white font-semibold">Hasil Konsultasi</p>
        </div>
        <table class="border border-collapse border-solid w-full">
            <tbody>
                <tr>
                    <td>Nama Pasien</td>
                    <td class="text-left border border-solid">{{ $namaPasien }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="xl:px-[150px] px-10">
        <h6>Gejala yang dialami</h6>
        <table class="border border-collapse border-solid w-full">
            <thead>
                <tr class="bg-blue-500">
                    <th class="border border-slate-300">No.</th>
                    <th class="border border-slate-300">Kode Gejala</th>
                    <th class="border border-slate-300">Nama Gejala</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($diagnosa->gejala_penyakit as $gejalaYangDipilih)
                    <tr>
                        <td class="border border-slate-300">{{ $i++ }}</td>
                        <td class="border border-slate-300">{{ $gejalaYangDipilih->kode_gejala }}</td>
                        <td class="border border-slate-300">{{ $gejalaYangDipilih->nama_gejala }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="xl:px-[150px] px-10">
        <table>
            <tr>
                <td class="border border-slate-300">Nama penyakit</td>
                <td class="border border-slate-300">:</td>
                <td class="border border-slate-300 font-bold">{{ $diagnosa->nama_penyakit }}</td>
            </tr>
            <tr>
                <td class="border border-slate-300">Persentase dan Nilai Kepercayaan</td>
                <td class="border border-slate-300">:</td>
                <td class="border border-slate-300 font-bold">{{ $diagnosa->persentase_penyakit}}%</td>
            </tr>
        </table>
    </div>
    <div class="">
        <table>
            <tbody>
                {{-- @foreach (json_decode($solusi->solusi) as $solusi)
                    <tr>
                        <td>{{ $solusi }}</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
    <footer class="p-3">
        <div class="text-center">
            <p>Copyright 2022</p>
        </div>
    </footer>
</body>

</html>
