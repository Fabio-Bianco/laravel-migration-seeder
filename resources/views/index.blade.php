@extends('layouts.app')

@section('title', 'Tabellone Treni')

@section('content')
<div class="trains-container">
    <h1 class="text-4xl md:text-5xl font-bold text-center mb-8 text-base-content">
        🚆 Treni in Partenza
    </h1>

    <div class="overflow-x-auto w-full">
        <table class="trains-table table-zebra min-w-full bg-base-100 rounded-xl shadow-lg">
            <thead>
                <tr>
                    <th>Compagnia</th>
                    <th>Partenza</th>
                    <th>Arrivo</th>
                    <th>Ora Partenza</th>
                    <th>Ora Arrivo</th>
                    <th>Codice</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @forelse($trains as $train)
                <tr>
                    <td class="max-w-[140px] truncate break-words">{{ $train->azienda }}</td>
                    <td class="break-words">{{ $train->stazione_partenza }}</td>
                    <td class="break-words">{{ $train->stazione_arrivo }}</td>
                    <td>{{ \Carbon\Carbon::parse($train->orario_partenza)->format('d/m/Y H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($train->orario_arrivo)->format('d/m/Y H:i') }}</td>
                    <td class="break-words">{{ $train->codice_treno }}</td>
                    <td>
                        <span class="badge {{ $train->in_orario ? 'badge-success' : 'badge-error' }}">
                            {{ $train->in_orario ? 'Sì' : 'No' }}
                        </span>
                    </td>
                    <td>
                        <span class="badge {{ $train->cancellato ? 'badge-error' : 'badge-success' }}">
                            {{ $train->cancellato ? 'Sì' : 'No' }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center p-6">Nessun treno in partenza al momento.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
