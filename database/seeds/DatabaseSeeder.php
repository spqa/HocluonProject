<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('UserTableSeeder');
        //$this->call('ProfileTableSeeder');
        //$this->call('TagSeeder');
        //$this->call('TeacherTagSeeder');
        //$this->call('RateSeeder');
        $this->call('StatisticalSeeder');
    }
}
