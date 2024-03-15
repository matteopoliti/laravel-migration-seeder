<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newtrain = new Train();
            $newtrain->company = $faker->company();
            $newtrain->departure_station = $faker->city();
            $newtrain->arrival_station = $faker->city();
            $newtrain->departure_time = $faker->time();
            $newtrain->arrival_time = $faker->time();
            $newtrain->train_code = $faker->bothify('?#??##?#');
            $newtrain->carriages = $faker->numberBetween(2, 15);
            $newtrain->on_time = $faker->boolean();
            $newtrain->cancelled = $faker->boolean();
            $newtrain->save();
        }
    }
}
