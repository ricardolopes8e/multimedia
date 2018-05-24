<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('modalidades')->insert([
            'name' => 'hearthstone',
            'sigla' => 'hs',
        ]);

        DB::table('modalidades')->insert([
            'name' => 'league of legends',
            'sigla' => 'lol',
        ]);

        DB::table('modalidades')->insert([
            'name' => 'counter-strike',
            'sigla' => 'cs',
        ]);






    }
}