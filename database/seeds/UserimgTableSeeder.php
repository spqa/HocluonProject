<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/15/2016
 * Time: 2:04 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Userimg;

class UserimgTableSeeder extends Seeder{
    public function run()
    {
     $faker=\Faker\Factory::create();
        Userimg::truncate();
        foreach (\App\User::all() as $user){
            $img=new Userimg();
            $img->link=$faker->imageUrl(370,230,"people",true);
            $user->userimg()->save($img);
        }
    }
}