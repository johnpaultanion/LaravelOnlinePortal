<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;



class LessonsSeeder extends Seeder
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

            $userid = DB::table("users")->where('id',$index)->first();
            $catid = DB::table("categories")->where('id',$index)->first();
          
            DB::table('lessons')->insert([
                'title' =>  $faker->word,
                'description' => $faker->word,
                'thumbnail' => 'nothumbnail.jpg',
                'video_name' => 'novideo.mp4',
                'user_id' => $userid->id,
                'category_id' => $catid->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ]);
        }
    }
}
