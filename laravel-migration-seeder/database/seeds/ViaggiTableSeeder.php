<?php

use Illuminate\Database\Seeder;
use App\Viaggio;
use Faker\Generator as Faker;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_viaggio = new Viaggio();
            $new_viaggio->city= $faker->city();
            $new_viaggio->state = $faker->state();
            $new_viaggio->address = $faker->streetAddress();
            $new_viaggio->night = $faker->numberBetween(1, 30);
            $new_viaggio->description = $faker->paragraphs(5, true);
            $new_viaggio->price = $faker->numberBetween(20, 5000);
            $new_viaggio->save();
        }
    }
}
