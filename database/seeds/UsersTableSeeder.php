<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	//Ejemplo de insercion de usuarios (Ocupo el helper bcrypt para poner mi clave encriptada en MD5)
        User::create([
        	'name' => 'Mirtha',
        	'email' => 'mirta.castro@gmail.com',
        	'password' => bcrypt('123123')
        ]);
    }
}
