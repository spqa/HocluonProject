<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/15/2016
 * Time: 3:45 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Userlike;

class UserlikeTableSeeder extends Seeder{
    public function run()
    {
     $faker=\Faker\Factory::create();
        Userlike::truncate();
        foreach (range(1,1000) as $index){
            $userlike=[['user_id'=>$faker->numberBetween(1,200)],['like_id'=>$faker->numberBetween(1,200)]];
            \DB::table('userlikes')->insert($userlike);
        }
    }
}