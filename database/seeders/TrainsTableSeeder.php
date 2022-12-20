<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $newTrain = new Train();
            $newTrain->azienda = 'trenitalia';
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(2, true);
            $newTrain->carrozze = $faker->randomNumber(2, true);
            $newTrain->in_orario = $faker->boolean(true);
            $newTrain->cancellato = $faker->boolean(false);

            $newTrain->save();
        }
    }
}
