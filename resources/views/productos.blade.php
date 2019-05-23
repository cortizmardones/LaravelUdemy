@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <h4 class="text-center">N° Producto: </h4>
                <hr>
                @foreach ($products as $product)
                    <h4 class="text-center"> {{$num = $num+1}}</h4>
                @endforeach
            </div>
            
    
            <div class="col-md-3">
                <h4 class="text-center">Nombre Producto: </h4>
                <hr>
                @foreach ($products as $product)
                    <h4 class="text-center"> {{ $product->name}}  </h4>
                @endforeach
            </div>

            <div class="col-md-3">
                <h4 class="text-center">Precio: </h4>
                <hr>
                @foreach ($products as $product)
                <h4 class="text-center">{{ $product->price}}</h4>
                
                @endforeach
            </div>

          
            <div class="col-md-3">
                <h4 class="text-center">Precio: </h4>
                <hr>
                @foreach ($products as $product)
                <h4 class="text-center">{{ $product->price}}</h4>
                
                @endforeach
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                 
            </div>
            <div class="col-md-5">
                <br><br>
                {{ $products->links() }}

                <br><br>
                <a href=" {{ url('/admin/products/create') }} "><button class="btn btn-success">Nuevo Producto </button></a>
                <a href=" {{ url('/admin/products/create') }} "><button class="btn btn-warning">Editar Producto </button></a>
                <a href=" {{ url('/admin/products/create') }} "><button class="btn btn-danger">Eliminar Producto </button></a>
            </div>
            <div class="col-md-4">
                
            </div>              
        </div>

    </div>


@endsection
