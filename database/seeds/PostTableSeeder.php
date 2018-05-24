<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'FTW NO ROCK IN RIO!',
            'name' => 'post1',
            'video' => 'http://www.youtube.com/embed/pTkb-ONnWyw?html5=1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'UP ZUKA EM MILÃO',
            'name' => 'post2',
            'video' => 'https://www.youtube.com/embed/vExNefA6ikY?html5=1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);


        DB::table('posts')->insert([
            'title' => 'HEARTHSTONE FESTIVAL',
            'name' => 'post3',
            'video' => 'https://www.youtube.com/embed/Du9h17shYzY?html5=1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Jogador da UP consegue Top 5!',
            'name' => 'post4',
            'video' => '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
