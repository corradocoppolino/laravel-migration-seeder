<?php

use App\Voyage;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VoyageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 100; $i++) { 
            
            $new_voyage = new Voyage();
            $new_voyage->reference=$faker->bothify('??-########');
            $new_voyage->address=$faker->streetAddress();
            $new_voyage->city=$faker->city();
            $new_voyage->state=$faker->state();
            $new_voyage->price_day=$faker->numberBetween(20,200);
            $new_voyage->postal_code=$faker->postcode();
            $new_voyage->save();

        }

    }
}
