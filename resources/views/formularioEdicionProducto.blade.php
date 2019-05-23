@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                
            
                <br>
                Formulario de edicion de  producto:
                <br><br>
                <form method="POST" action="">
                    {{ csrf_field() }}
                    
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                    <br>
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" value="">
                    <br>
                    <label for="">Long description</label>
                    <input type="text" name="long_description" class="form-control" value="" >
                    <br>
                    <label for="">Price</label>
                    <input type="num" name="price" class="form-control" value="">
                    <br>
                    <button class="btn btn-info">Modificar</button>
                </form>
                
            </div>

        </div>

    
    </div>


@endsection
