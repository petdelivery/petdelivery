<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=0; $i < 15; $i++) { 
    		DB::table('articulos')->insert([
            'title' => str_random(20),
            'description' => str_random(40),
            'precio' =>'75000',
            'category' => str_random(10)
        ]);
    	}
        
    }
}
