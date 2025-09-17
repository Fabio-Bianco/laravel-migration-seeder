<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    @vite('resources/js/app.js')
    @yield('css')

</head>
<body>

    <body class="bg-base-200 text-base-content font-mono">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Tabellone Treni in Partenza</h1>
        <div class="overflow-x-auto">
            <table class="table table-zebra w-full">
                <thead>
                    <tr>
                        <th>Azienda</th>
                        <th>Stazione Partenza</th>
                        <th>Stazione Arrivo</th>
                        <th>Orario Partenza</th>
                        <th>Orario Arrivo</th>
                        <th>Codice Treno</th>
                        <th>Carrozze</th>
                        <th>In Orario</th>
                        <th>Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ \Carbon\Carbon::parse($train->orario_partenza)->format('H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($train->orario_arrivo)->format('H:i') }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                     @endforeach
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>