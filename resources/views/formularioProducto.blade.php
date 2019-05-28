@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                
            
                <br>
                Formulario de producto:
                <br><br>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <form method="POST" action=" {{ url('/admin/products') }} ">
                    {{ csrf_field() }}
                    
                    <!--La directiva old en el campo value me permite traer de vuelta el ultimo campo que ingreso el usuario en el formulario y que provoco error en las validaciones que tengo en el controlador-->
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value=" {{ old('name') }} ">
                    <br>
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" value=" old('name') }} ">
                    <br>
                    <label for="">Long description</label>
                    <input type="text" name="long_description" class="form-control" value=" old('name') }} ">
                    <br>
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control" value="old('name') }} ">
                    <br>
                    <button class="btn btn-success"><i class="fas fa-plus-square"></i> Agregar</button>
                </form>
                
                <br>
                <a href=" {{ url('/admin/products') }} "><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> Volver</button></a>

               
                 
                     
            </div>

        </div>

    
    </div>


@endsection
