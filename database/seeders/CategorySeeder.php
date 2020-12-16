<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,2) as $index){

           
            DB::table('categories')->insert([
                'name' =>  $faker->word,
                'description' => $faker->word,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ]);
        }
    }
}
