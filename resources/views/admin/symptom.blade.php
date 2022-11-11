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
                <table class="border-collapse border border-slate-400">
                    <thead>
                        <tr>
                            <th class="border border-slate-300">No</th>
                            <th class="border border-slate-300">Symptom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-slate-300">1</td>
                            <td class="border border-slate-300">Sakit</td>
                        </tr>
                        <tr>
                            <td class="border border-slate-300">2</td>
                            <td class="border border-slate-300">Sakit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
