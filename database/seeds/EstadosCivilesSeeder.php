<?php

use Illuminate\Database\Seeder;
use App\EstadoCivil;

class EstadosCivilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$datos =  array(
    	array('nombre' => "Soltero"),
    	array('nombre' => "Casado"),
    	array('nombre' => "Divorciado"),
    	array('nombre' => "Unión Libre"),
    	array('nombre' => "Viudo"),
    	);
        EstadoCivil::insert($datos);
    }
}
