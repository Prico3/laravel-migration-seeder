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
        $newTrain = new Train();
        $newTrain->azienda = $faker->words();
        $newTrain->stazione_arrivo = $faker->city();
        $newTrain->stazione_partenza = $faker->city();
        $newTrain->orario_partenza = $faker->time();
        $newTrain->orario_arrivo = $faker->time();
        $newTrain->codice_treno = $faker->randomNumber(3, true);
        $newTrain->carrozze = $faker->randomNumber(3, true);
        $newTrain->in_orario = $faker->boolean();
        $newTrain->cancellato = $faker->boolean();
    }
}
