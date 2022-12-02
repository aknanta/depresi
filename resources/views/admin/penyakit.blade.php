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
                <div class="h-screen border shadow rounded-t">
                    <div class="max-w-screen bg-blue-500">
                        <p class="p-4 font-semibold text-white">
                            Data Penyakit
                        </p>
                    </div>
                    <div class="w-fit bg-blue-500 m-4 p-2 rounded text-white">
                        <a href="{{ URL::to('admin/penyakit/create') }}">
                            <span class="font-bold">+</span>
                            Tambah Data</a>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-x">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="h-10 bg-blue-500 text-white">
                                    <th class="border border-slate-300">No</th>
                                    <th class="border border-slate-300">Kode Penyakit</th>
                                    <th class="border border-slate-300">Nama Penyakit</th>
                                    <th class="border border-slate-300">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($penyakit as $p)
                                    <tr>
                                        <td class="border border-slate-300">{{ $no++ }}</td>
                                        <td class="border border-slate-300">{{ $p->kode_penyakit }}</td>
                                        <td class="border border-slate-300">{{ $p->nama_penyakit }}</td>
                                        <td class="flex border border-slate-300">
                                            <form action="{{ URL::to('admin/penyakit/' . $p->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Yakin hapus data?')" class="border bg-red-500 rounded font-semibold p-2 text-white hover:bg-red-600">Hapus</button>
                                            </form>
                                            <a href="{{ URL::to('admin/penyakit/' . $p->id) . '/edit' }}" class="border bg-yellow-500 text-white p-2 ml-2 hover:bg-yellow-600 font-semibold">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
