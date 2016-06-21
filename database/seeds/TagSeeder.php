<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $lstTag=collect(['toeic','sat','ielts','A1','A2','B1','B2',
        'C1','C2','tiểu học','cấp 2','cấp 3','khối D','luyện thi đại học',
         'beginner','streamline','cutting edge','trắc nghiệm','nghe','nói','đọc',
          'viết','ngữ pháp','giao tiếp','kinh tế','IT','công nghệ thông tin','cấp tốc',
            'trẻ em'
        ]);
        foreach($lstTag as $item){
            $tag=new \App\Tag();
            $tag->tag_content=$item;
            $tag->save();
        }
        //
    }
}
