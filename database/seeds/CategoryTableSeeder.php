<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Category([
            'name' => '최신기사'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => '이민/비자'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => '부동산/머니'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => '경제/IT'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => '사회/정치'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => '교육'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => '스포츠/연예'
        ]);
        $role->save();


        $role = new \App\Category([
            'name' => '라이프/레저'
        ]);
        $role->save();
        $role = new \App\Category([
            'name' => '국제'
        ]);
        $role->save();

        $role = new \App\Category([
            'name' => '오피니언'
        ]);
        $role->save();
    }
}
