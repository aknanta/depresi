<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="{{ 'css/app.css' }}" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen overflow-hidden">
        <x-sidebar />
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <x-header />
            <div class="p-2">
                <div class="flex flex-wrap lg:grid lg:gap-3 grid-flow-col">
                    <div class="mt-5 h-52 max-w-screen-sm rounded shadow-xl bg-white">
                        <div class="text-center font-semibold">
                            <p class="pt-5">Data Pasien</p>
                        </div>
                        <p class="p-3 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus
                            et
                            consectetur, non asperiores rem soluta officiis aliquid rerum quisquam recusandae minima,
                            libero nam
                            alias est laborum, tempore voluptate. Blanditiis, est?</p>
                    </div>
                    <div class="mt-5 h-52 max-w-screen-sm rounded shadow-xl bg-white">
                        <div class="text-center font-semibold">
                            <p class="pt-5">Data Gejala</p>
                        </div>
                        <p class="p-3 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus
                            et
                            consectetur, non asperiores rem soluta officiis aliquid rerum quisquam recusandae minima,
                            libero nam
                            alias est laborum, tempore voluptate. Blanditiis, est?</p>
                    </div>
                    <div class="mt-5 h-52 max-w-screen-sm rounded shadow-xl bg-white">
                        <div class="text-center font-semibold">
                            <p class="pt-5">Data Penyakit</p>
                        </div>
                        <p class="p-3 text-justify">Lorem ipsum dolor sit amet co nsectetur, adipisicing elit.
                            Temporibus et
                            consectetur, non asperiores rem soluta officiis aliquid rerum quisquam recusandae minima,
                            libero nam
                            alias est laborum, tempore voluptate. Blanditiis, est?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
