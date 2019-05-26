@extends('layouts.app')

@section('content')

    <div class="container">
    
        <br><br><br>

        <div class="row">
            
            <div class="col-md-2">
                <a href=" {{ url('/admin/products/create') }} "><button class="btn btn-success"><i class="fas fa-plus-square"></i> Nuevo Producto </button></a>
            </div>

            <div class="col-md-2">
                <h4 class="text-center">N° Producto: </h4>
                <hr>
                @foreach ($products as $product)
                    <h4 class="text-center"> {{$num = $num+1}}</h4>
                @endforeach
            </div>
            
    
            <div class="col-md-2">
                <h4 class="text-center">Nombre : </h4>
                <hr>
                @foreach ($products as $product)
                    <h4 class="text-center"> {{ $product->name}}  </h4>
                @endforeach
            </div>

            <div class="col-md-2">
                <h4 class="text-center">Precio: </h4>
                <hr>
                @foreach ($products as $product)
                <h4 class="text-center"> $ {{ $product->price}}</h4>
                
                @endforeach
            </div>

          
            <div class="col-md-2">
                <h4 class="text-center">Eliminar: </h4>
                <hr>
                @foreach ($products as $product)
                
                <a href=" {{ url('/admin/products/'.$product->id.'/delete') }} "><h4 class="text-center"><i class="fas fa-trash-alt"></i></h4></a>
                
                @endforeach
            </div>

            
            <div class="col-md-2">
                <h4 class="text-center">Editar: </h4>
                <hr>
                @foreach ($products as $product)
                
                 <a href=" {{ url('/admin/products/'.$product->id.'/formulario') }} "><h4 class="text-center"><i class="fas fa-edit"></i></h4></a>
                
                @endforeach
            </div>
    
             <div class="col-md-2">
        
            </div>

               




        </div>

        <div class="row">
            <div class="col-md-3">
                 
            </div>
            <div class="col-md-5">
                <br><br>
                {{ $products->links() }}

                <br><br>
                
            </div>
            <div class="col-md-4">
                
            </div>              
        </div>

    </div>


@endsection
