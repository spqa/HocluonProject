<?php

use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
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
            foreach(range(1,100) as $index1){
                $rate=new \App\Rate();
                $rate->teacher_id=$index;
                $rate->user_id=$index1;
                $rate->star=$faker->numberBetween(1,5);
                $rate->save();
            }
        }
        //
    }
}
