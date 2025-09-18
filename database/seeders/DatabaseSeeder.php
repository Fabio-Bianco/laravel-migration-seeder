<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create(config('app.faker_locale'));

        $trains = [];

        for ($i = 0; $i < 50; $i++) {

            // Partenza tra adesso e le prossime 2 ore
            $partenza = $faker->dateTimeBetween('now', '+2 hours');

            // Arrivo tra partenza e +6 ore dalla partenza
            // Faker accetta oggetti DateTime come intervallo
            $arrivoMin = clone $partenza;
            $arrivoMax = (clone $partenza)->modify('+6 hours');
            $arrivo = $faker->dateTimeBetween($arrivoMin, $arrivoMax);

            $trains[] = [
                'azienda'           => $faker->company,
                'cancellato'        => $faker->boolean(10), // ~10% cancellati
                'codice_treno'      => strtoupper($faker->unique()->bothify('??####')),
                'in_orario'         => $faker->boolean,
                'orario_partenza'   => $partenza, // DateTime → cast automatico da query builder
                'orario_arrivo'     => $arrivo,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo'   => $faker->city,
                'totale_carrozze'   => $faker->numberBetween(4, 12),
                'created_at'        => now(),
                'updated_at'        => now(),
            ];
        }

        DB::table('trains')->insert($trains);
    }
}
