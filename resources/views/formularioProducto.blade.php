@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                
            
                <br>
                Formulario de producto:
                <br><br>
                <form method="POST" action=" {{ url('/admin/products') }} ">
                    {{ csrf_field() }}
                    
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" required>
                    <br>
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" required>
                    <br>
                    <label for="">Long description</label>
                    <input type="text" name="long_description" class="form-control"  required>
                    <br>
                    <label for="">Price</label>
                    <input type="num" name="price" class="form-control" required>
                    <br>
                    <button class="btn btn-success"><i class="fas fa-plus-square"></i> Agregar</button>
                </form>
                
                <br>
                <a href=" {{ url('/admin/products') }} "><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> Volver</button></a>

               
                 
                     
            </div>

        </div>

    
    </div>


@endsection
