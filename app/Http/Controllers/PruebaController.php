<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PruebaController extends Controller
{
    public function welcome(){

    	 //La función compact devuelve un arreglo asociativo. (Es para no tener que hacer arreglos manuales)
    	$products = Product::all();
    	$num = 0;
        return view('productos')->with(compact('products','num'));
    }
}
