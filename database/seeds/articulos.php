<?php

use Illuminate\Database\Seeder;

class articulos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('articulos')->insert([
            'title' => str_random(10),
            'description' => str_random(10).'@gmail.com',
            'precio' => bcrypt('secret'),
            'category' => str_random(10),
        ]);
    }
}
