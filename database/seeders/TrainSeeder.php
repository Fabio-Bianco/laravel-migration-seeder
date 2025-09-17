<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'azienda' => 'Trenitalia',
                'cancellato' => 0,
                'codice_treno' => 'TI1234',
                'created_at' => now(),
                'updated_at' => now(),
                'in_orario' => 1,
                'orario_arrivo' => Carbon::now()->addHours(3),
                'orario_partenza' => Carbon::now()->addHour(),
                'stazione_arrivo' => 'Milano Centrale',
                'stazione_partenza' => 'Roma Termini',
                'totale_carrozze' => 8,
            ],
            [
                'azienda' => 'Italo',
                'cancellato' => 0,
                'codice_treno' => 'IT5678',
                'created_at' => now(),
                'updated_at' => now(),
                'in_orario' => 1,
                'orario_arrivo' => Carbon::now()->addHours(5),
                'orario_partenza' => Carbon::now()->addHours(2),
                'stazione_arrivo' => 'Venezia Mestre',
                'stazione_partenza' => 'Napoli Centrale',
                'totale_carrozze' => 10,
            ],
            [
                'azienda' => 'Trenord',
                'cancellato' => 1,
                'codice_treno' => 'TN9012',
                'created_at' => now(),
                'updated_at' => now(),
                'in_orario' => 0,
                'orario_arrivo' => Carbon::now()->addHours(4),
                'orario_partenza' => Carbon::now()->addHours(1),
                'stazione_arrivo' => 'Bergamo',
                'stazione_partenza' => 'Brescia',
                'totale_carrozze' => 6,
            ],
            [
                'azienda' => 'Frecciarossa',
                'cancellato' => 0,
                'codice_treno' => 'FR3456',
                'created_at' => now(),
                'updated_at' => now(),
                'in_orario' => 1,
                'orario_arrivo' => Carbon::now()->addHours(2),
                'orario_partenza' => Carbon::now()->addMinutes(30),
                'stazione_arrivo' => 'Torino Porta Susa',
                'stazione_partenza' => 'Firenze SMN',
                'totale_carrozze' => 9,
            ],
            [
                'azienda' => 'Regionale',
                'cancellato' => 0,
                'codice_treno' => 'RG7890',
                'created_at' => now(),
                'updated_at' => now(),
                'in_orario' => 0,
                'orario_arrivo' => Carbon::now()->addHours(1),
                'orario_partenza' => Carbon::now()->addMinutes(15),
                'stazione_arrivo' => 'Padova',
                'stazione_partenza' => 'Verona Porta Nuova',
                'totale_carrozze' => 5,
            ],
        ]);
    }
}