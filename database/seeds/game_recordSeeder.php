<?php

use Illuminate\Database\Seeder;

class game_recordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('game_records')->insert([
            'turn' => 0,
            'piece' => 0,
            'square' => 59, 
        ]);
    }
}
