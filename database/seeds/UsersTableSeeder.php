<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
  use App\User;
     * @return void
     */
    public function run()
    {
        User::insert([
    		'usuario' => "admin",
    		'email' => "julioingsist@gmail.com",
    		'password' => bcrypt("199425julio"),
    		'tipo' => 1,
    		]);	
    }
}        