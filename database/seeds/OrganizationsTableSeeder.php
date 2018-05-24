<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('organizations')->insert([
            'name' => 'For The Win',
            'sigla' => 'FTW',
            'description' => 'A For The Win eSports Club é um clube de desportos eletrónicos registado como associação. 
No mercado dos videojogos e plataformas eletrónicas a FTW eSports encontra-se no ativo desde 2011, denominada como clan, e como clube de desportos electrónicos desde 2012.
Faz-se representar a nível nacional e internacional, tendo já uma longa história em awards obtidos, em ambas as vertentes.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('organizations')->insert([
            'name' => 'Grow Up',
            'sigla' => 'UP',
            'description' => 'A Grow uP Gaming é uma associação desde 2008 e é atualmente uma das maiores comunidades de Multigaming em Portugal. Com mais de 1000 membros, a sua missão é apoiar o desenvolvimento e crescimento da atividade de Jogos em Portugal, de uma forma saudável e responsável.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);




    }
}