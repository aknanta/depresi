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
                <div class="max-w-screen border border-collapse rounded-t bg-blue-500">
                    <p class="p-5 text-white font-semibold">Data Rules</p>
                </div>
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-x">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="h-10 text-center">
                                <th class="border border-slate-300">No</th>
                                <th class="border border-slate-300">Kode Penyakit</th>
                                <th class="border border-slate-300">Kode Gejala</th>
                                <th class="border border-slate-300">Bobot Nilai</th>
                                <th class="border border-slate-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($rules as $key => $r)
                                <tr>
                                    <td class="border border-slate-300">{{ $rules->firstItem() + $key }}</td>
                                    <td class="border border-slate-300">{{ $r->kode_penyakit }}</td>
                                    <td class="border border-slate-300">{{ $r->kode_gejala }}</td>
                                    <td class="border border-slate-300">{{ $r->bobot_nilai }}</td>
                                    <td class="flex border border-slate-300">
                                        <button type="submit" class="border bg-red-500 text-white font-semibold p-2 hover:bg-red-600">Hapus</button>
                                        <a href="" class="border bg-yellow-500 text-white font-semibold p-2 ml-2 hover:bg-yellow-600">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $rules->links() }}
                </div>

            </div>
        </div>
    </div>
</body>

</html>
