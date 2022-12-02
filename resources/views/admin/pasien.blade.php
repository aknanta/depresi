<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen overflow-hidden">
        <x-sidebar />
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <x-header />
            <div class="p-2">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-x">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="h-10 bg-blue-500 text-white">
                                <th class="border border-slate-300">No</th>
                                <th class="border border-slate-300">Nama Pasien</th>
                                <th class="border border-slate-300">Nama Penyakit</th>
                                <th class="border border-slate-300">Persentase</th>
                                <th class="border border-slate-300">Solusi</th>
                                <th class="border border-slate-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pasien as $key => $p)
                                <tr>
                                    <td class="border border-slate-300">{{ $pasien->firstItem() + $key }}</td>
                                    <td class="border border-slate-300">{{ $p->nama_pasien }}</td>
                                    @php
                                        $pl = json_decode($p->diagnosa);
                                        $pa = json_decode($p->solusi);
                                    @endphp
                                    {{-- @if ($key+1 === $p->id)
                                    @foreach ($pl as $a) --}}
                                        <td class="border border-slate-300">{{ $pl->nama_penyakit }}</td>
                                        <td class="border border-slate-300">{{ $pl->persentase_penyakit }}%</td>
                                        <td class="border border-slate-300">{{ $pa->solusi }}</td>
                                    {{-- @endforeach
                                    @endif --}}

                                    {{--    <td>{{ $p->solusi }}</td> --}}
                                    <td class="border border-slate-300">
                                        <button type="submit">Hapus</button>
                                        <a href="">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $pasien->links() }}
                </div>

            </div>
        </div>
    </div>
</body>

</html>
