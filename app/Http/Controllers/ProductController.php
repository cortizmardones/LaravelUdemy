<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
    	$products = Product::paginate(5);
    	$num = 0;
        return view('productos')->with(compact('products','num'));
    }

    public function create(){
    	return view('formularioProducto');	
    }

    public function store(Request $request){
    	//return view();

    	//dd($request->all()); Metodo para imprimir

    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save(); //INSERT

    	return view('formularioProducto');

    }

}
