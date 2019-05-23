@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                
                <h4 class="text-center">Nombre Producto: Precio:</h4>
                
                <hr>
                @foreach ($products as $product)
                    <h4 class="text-center"> {{$num = $num+1}} {{ $product->name}} {{ $product->price}} </h4>
            
                @endforeach
            </div>
            <div class="col-md-4"></div>
        </div>
      

    </div>

@endsection
