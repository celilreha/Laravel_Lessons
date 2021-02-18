<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0;$i<20;$i++){
            DB::table("users")->insert([
                "name"=>$faker->name,
                "email"=>$faker->email,
                "password"=>md5("102030")
            ]);
        }

    }
}
