<?php

use Illuminate\Database\Seeder;
use App\Pais;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::insert([
        	'nombre' => "México",	
        	]);
    }
}
