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
                <div class="border border-black">
                    <div class="border shadow bg-blue-500 rounded-t">
                        <div class="p-4">
                            <p class="text-white font-semibold">
                                Edit Data Penyakit
                            </p>
                        </div>
                    </div>
                    <form action="{{ URL::to('/admin/gejala/' . $gejala->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="m-4">
                            <div class="flex flex-wrap -mr-0.5 -ml.0.5">
                                <label for="">Kode Gejala</label>
                                <input type="text" name="kode_gejala" value="{{ $gejala['kode_gejala'] }}"
                                    class="border border-collapse ml-6">
                            </div>
                            <div class="flex flex-wrap -mr-0.5 -ml-0.5 mt-4">
                                <label for="">Nama Gejala</label>
                                <input type="text" name="nama_gejala" value="{{ $gejala['nama_gejala'] }}"
                                    class="border border-collapse ml-5">
                            </div>
                            <button type="submit" class="border border-collapse bg-blue-500 mt-4 rounded h-9">
                                <span class="p-4 text-white font-semibold">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
