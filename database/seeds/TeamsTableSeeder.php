<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('teams')->insert([
            'name' => 'FTW HS PRO',
            'organization_id' => '1',
            'modalidade_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('teams')->insert([
            'name' => 'FTW LOL PRO',
            'organization_id' => '1',
            'modalidade_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('teams')->insert([
            'name' => 'FTW CS PRO',
            'organization_id' => '1',
            'modalidade_id' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('teams')->insert([
            'name' => 'GROWUP HS PRO',
            'organization_id' => '2',
            'modalidade_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('teams')->insert([
            'name' => 'GROWUP LOL PRO',
            'organization_id' => '2',
            'modalidade_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);



    }
}