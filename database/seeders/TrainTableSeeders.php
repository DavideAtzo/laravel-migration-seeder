<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) { 
            $new_train = new Train();
            $new_train->train_company = $faker->randomElement(['italo', 'TreniItalia', 'Freccia Rossa', 'Freccia Argento', 'Freccia Bianca', 'Trenord']);
            $new_train->departure_station = $faker->city();
            $new_train->arrived_station = $faker->city();
            $new_train->departure = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->arrivals = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->train_code = $faker->bothify('??-#####');
            $new_train->n_carriages = $faker->numberBetween(6, 14);
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->is_deleted = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
