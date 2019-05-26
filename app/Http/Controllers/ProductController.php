<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
    public function index(){
    	
        $products = Product::paginate(15);
    	$num = 0;
        return view('productos')->with(compact('products','num'));

    }

    public function create(){

    	return view('formularioProducto');

    }

    public function store(Request $request){

    	//dd($request->all()); Metodo para imprimir

    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save(); //INSERT


        //Esta parte la vuelvo a crear del metodo index(PORQUE O SINO ME ARROJA ERROR DE VARIABLES NULAS YA QUE TIENE QUE SABER QUE PRODUCTOS HAY EN LA BDD)
        $products = Product::paginate(15);
        $num = 0;
        return view('productos')->with(compact('products','num'));

    }

    public function update(Request $request,$id){
    	
    	$products=Product::find($id);
        $num = 0;
        return view ('formularioEdicionProducto')->with(compact('products','num'));

    }


    public function update2(Request $request,$id){
    	
        $product = Product::find($id);
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save(); //UPDATE

        //Esta parte la vuelvo a crear del metodo index(PORQUE O SINO ME ARROJA ERROR DE VARIABLES NULAS YA QUE TIENE QUE SABER QUE PRODUCTOS HAY EN LA BDD)
        $products = Product::paginate(15);
        $num = 0;
        return view('productos')->with(compact('products','num'));
        
    }


    public function destroy($id){
    
    	$product = Product::find($id);
    	$product->delete(); //Eliminar

        //Esta parte la vuelvo a crear del metodo index(PORQUE O SINO ME ARROJA ERROR DE VARIABLES NULAS YA QUE TIENE QUE SABER QUE PRODUCTOS HAY EN LA BDD)
        $products = Product::paginate(15);
        $num = 0;
        return view('productos')->with(compact('products','num'));

    }

}
