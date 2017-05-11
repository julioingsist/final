<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$fecha = new \DateTime();
	    $fecha->format('Y-m-d H:m:s');

	    DB::table('users')->insert([
    		'usuario' => "admin",
    		'email' => "julioingsist@gmail.com",
    		'password' => bcrypt("199425julio"),
    		'tipo' => 1,
    		'created_at' => $fecha,
    		]);	
    }
}
