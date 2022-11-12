<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ 'css/app.css' }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-[#F4F4F4]">
    <x-header-index />
    <div class="xl:px-[150px] px-10">
        <form action="" method="POST">
            {{-- <div class="border border-slate-300">
                <p>Halo</p>
            </div> --}}
            <div class="h-screen border shadow">
                @foreach ($gejala as $g)
                <div class="flex mx-3">
                    <input type="checkbox" name="" id="" value="{{ $g->kode_gejala }}">
                    <p class="p-2">{{ $g->nama_gejala }}</p>
                </div>
                @endforeach
                <button href="" class="transition duration-200 bg-blue-500 hover:bg-blue-600 text-white py-2.5 rounded-lg text-sm shadow-sm font-semibold">Mulai Konsultasi</button>
            </div>
        </form>
    </div>
    <footer class="p-3">
        <div class="text-center">
            <p>Copyright 2022</p>
        </div>
    </footer>
</body>

</html>
