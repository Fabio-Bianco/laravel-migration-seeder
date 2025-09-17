<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    @vite(['resources/js/app.js'])
    @yield('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-base-200 min-h-screen">
    <div class="trains-container container mx-auto">
        <h1 class="text-4xl font-bold text-center mb-8 text-base-content">Treni in Partenza</h1>
        <div class="overflow-x-auto">
            <table class="trains-table table table-zebra w-full bg-base-100 shadow-xl rounded-lg">
                <thead>
                    <tr>
                        <th class="text-base-content">Compagnia</th>
                        <th class="text-base-content">Stazione di Partenza</th>
                        <th class="text-base-content">Stazione di Arrivo</th>
                        <th class="text-base-content">Orario di Partenza</th>
                        <th class="text-base-content">Orario di Arrivo</th>
                        <th class="text-base-content">Codice Treno</th>
                        <th class="text-base-content">In Orario</th>
                        <th class="text-base-content">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>
                            <span class="badge badge-success">{{ $train->in_orario ? 'Sì' : 'No' }}</span>
                        </td>
                        <td>
                            <span class="badge badge-error">{{ $train->cancellato ? 'Sì' : 'No' }}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>