<?php

use App\Flight;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 100; $i++) { 
            
            $new_flight = new Flight();
            $new_flight->city_partenza=$faker->city();
            $new_flight->city_arrivo=$faker->city();
            $new_flight->price=$faker->numberBetween(20,500);
            $new_flight->date=$faker->dateTimeBetween('0 week', '+3 week');
            $new_flight->save();
        
        }

    }
}