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
        <form action="{{ '/konsultasi-form/proses' }}" method="POST">
            @csrf
            <div class="h-screen border shadow">
                <div class="flex bg-blue-500">
                    <p class="font-bold p-2 ">ISI DATA DIRI</p>
                </div>
                <div class="flex m-2">
                    <label for="nama_pasien" class="">Nama Pasien</label>
                    <div class="">
                        <input type="text" class="border border-black ml-2 px-1 @error('nama_pasien') is-invalid @enderror" id="nama_pasien"
                            name="nama_pasien" value="{{ old('nama_pasien') }}">
                        @error('nama_pasien')
                            <div class="">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <hr/>
                <table class="border-collapse border border-slate-400 w-full">
                    <thead>
                        <tr>
                            <th class="border border-slate-300">No.</th>
                            <th class="border border-slate-300">Nama Gejala</th>
                            <th class="border border-slate-300"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($dataGejala as $gejala)
                            <tr>
                                <td class="border border-slate-300">{{ $i++ }}</td>
                                <td class="border border-slate-300">{{ $gejala['nama_gejala'] }}</td>
                                <td class="border border-slate-300">
                                    <input type="checkbox" class="cursor-pointer w-5 h-5" name="resultGejala[]"
                                        value="{{ $gejala['kode_gejala'] }}"
                                        @if (is_array(old('resultGejala')) && in_array($gejala['kode_gejala'], old('resultGejala'))) checked @endif>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-1">
                    <button type="submit"
                        class="border border-shadow bg-blue-500 rounded-full p-2 text-white hover:bg-blue-600 font-bold">Proses
                        Data</button>
                    <button type="reset"
                        class="border border-shadow bg-red-500 rounded-full p-2 text-white hover:bg-red-600 font-bold">Cancel</button>
                </div>
            </div>
        </form>
        {{-- @php
            isset($_GET['gejala']){
                var_dump($_GET['gejala']);
            }
        @endphp --}}
    </div>
    <footer class="p-3">
        <div class="text-center">
            <p>Copyright 2022</p>
        </div>
    </footer>
</body>

</html>
