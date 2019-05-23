<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//El Objeto make (crea los objetos) y el create los crea y además los guarda en la bdd
    	
        //Este comando crea solo un usuario. 
        //factory(Product::class)->create();

		
    	factory(Product::class,100)->create();

    }
}


