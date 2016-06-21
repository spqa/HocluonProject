<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/14/2016
 * Time: 11:45 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder{
    public function run()
    {
        $faker=\Faker\Factory::create();
        //User::truncate();
        foreach (range(1,100) as $index){
//                User::create(array([
//                'name'=>$faker->sentence(2),
//                'email'=>$faker->email(),
//                'password'=>$faker->password(6,10)
//            ]));

            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}