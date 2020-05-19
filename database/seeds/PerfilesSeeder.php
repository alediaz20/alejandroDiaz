<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
 use Illuminate\Support\Facades\DB;

class PerfilesSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('es_ES');
        for ($i = 0; $i < 50; $i++) {
             DB::table('perfiles')->insert(array(
                'nomre' => $faker->firstNameMale,
                'email'  => $faker->email,
                'facebook'   => $faker->facebook,
                'instagram' => $faker->instagram,
                'twitter' => $faker->twitter,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ));
        }

    }
}
