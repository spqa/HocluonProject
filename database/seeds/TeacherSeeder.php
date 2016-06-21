<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeacherSeeder extends Seeder
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
            $teacher=new Teacher();
            $teacher->first_name=$faker->firstName();
            $teacher->last_name=$faker->lastName();
            $teacher->dob=$faker->date('Y-m-d','2000-01-01');
            $teacher->doj=$faker->date('Y-m-d','now');
            $teacher->description=$faker->sentence(20);
            $teacher->email=$faker->email();
            $teacher->phone=$faker->phoneNumber();
            $teacher->subject=$faker->sentence('3');
            $teacher->skill=$faker->sentence('6');
            $teacher->linkimg=$faker->imageUrl(370,230,"people",true);

            $teacher->save();
        }
        //
    }
}
