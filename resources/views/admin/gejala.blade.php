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
            <div class="m-2">
                <div class="h-screen border shadow rounded-t">
                    <div class="max-w-screen bg-blue-500">
                        <p class="p-4 font-semibold text-white">
                            Data Gejala
                        </p>
                    </div>
                    <div class="w-fit bg-blue-500 m-4 p-2 rounded text-white">
                        <a href="{{ URL::to('admin/gejala/create') }}" class="">
                            <span class="font-bold">+</span>
                            Tambah Data</a>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="h-10 text-white bg-blue-500">
                                    <th class="border border-slate-300">No</th>
                                    <th class="border border-slate-300">Kode Gejala</th>
                                    <th class="border border-slate-300">Nama Gejala</th>
                                    <th class="border border-slate-300">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($gejala as $key => $g)
                                    <tr>
                                        <td class="border border-slate-300">{{ $gejala->firstItem() + $key }}</td class="border border-slate-300">
                                        <td class="border border-slate-300">{{ $g->kode_gejala }}</td>
                                        <td class="border border-slate-300">{{ $g->nama_gejala }}</td>
                                        <td class="flex border border-slate-300">
                                            <form action="{{ URL::to('admin/gejala/' . $g->id)  }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Yakin hapus data?')" class="border bg-red-500 rounded p-2 text-white hover:bg-red-600 font-semibold">Hapus</button>
                                            </form>
                                            <a href="{{ URL::to('admin/gejala/' . $g->id) . '/edit' }}" class="border bg-yellow-500 text-white p-2 ml-2 hover:bg-yellow-600 font-semibold">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                            {{ $gejala->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
