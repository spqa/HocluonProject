<?php

use Illuminate\Database\Seeder;

class StatisticalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Statistical::truncate();
        //ini_set("precision", 3);
        foreach(range(1,100) as $index){

            $st=new \App\Statistical();
            $st->teacher_id=$index;
            $x=DB::table('rates')->where('teacher_id',$index)->count();
            $st->totalusers=$x;
            $y=DB::table('rates')->where('teacher_id',$index)->sum('star');
            $st->totalstars=$y;
            $st->responses=$y/$x;
            $st->save();    
        }
        //
    }
}
