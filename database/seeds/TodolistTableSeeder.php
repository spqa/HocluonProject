<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/13/2016
 * Time: 10:16 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Todolist;

class TodolistTableSeeder extends Seeder {
    public function run()
    {
        // TODO: Implement run() method.
        $faker=\Faker\Factory::create();
        Todolist::truncate();
        foreach (range(1,50) as $index){
            Todolist::create(array(
                'name'=>$faker->sentence(2),
                'description'=>$faker->sentence(10)
            ));
        }
    }
}