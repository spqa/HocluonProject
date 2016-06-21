<?php

use Illuminate\Database\Seeder;

class TeacherTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        foreach(range(1,100) as $index){
            \App\Teacher::find($index)->tags()->attach($faker->numberBetween(1,29));
            \App\Teacher::find($index)->tags()->attach($faker->numberBetween(1,29));
        }


    }
}
