<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/14/2016
 * Time: 11:45 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Profile;

class ProfileTableSeeder extends Seeder{
    public function run()
    {
     $faker=\Faker\Factory::create();
        Profile::truncate();
        foreach (\App\User::all() as $user){
            
            $profile =new Profile;
            $profile->description=$faker->sentence(20);
            $profile->telephone=$faker->phoneNumber();
            $user->profile()->save($profile);
        }
        
    }
}