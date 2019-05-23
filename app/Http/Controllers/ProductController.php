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
    	return view('');	
    }

    public function store(){
    	//return view();
    }

}
