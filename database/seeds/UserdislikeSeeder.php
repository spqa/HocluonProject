<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/15/2016
 * Time: 3:46 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Userdislike;

class UserdislikeSeeder extends Seeder {
    public function run()
    {
     $faker=\Faker\Factory::create();
        Userdislike::truncate();
        foreach (range(1,1000) as $index){
            Userdislike::create(array([
                'user_id'=>$faker->numberBetween(1,200),
                'dislike_id'=>$faker->numberBetween(1,200)
            ]));
        }
    }
}