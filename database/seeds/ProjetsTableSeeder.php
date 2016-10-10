<?php

use Illuminate\Database\Seeder;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            'name' => str_random(10),
            'created_at' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),

        ]);
    }
}
