<?php

use Illuminate\Database\Seeder;

class Countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('countrys')->truncate();
        for ($i = 0; $i < 100; $i++) {
            DB::table('countrys')->insert([
                'name' => $faker->name,
                'country' => $faker->country,
                'city' => $faker->city,
                'streetName' => $faker->streetName,
                'path' =>$faker->imageUrl(640, 480)
            ]);
        }
    }
}


