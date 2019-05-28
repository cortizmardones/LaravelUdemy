@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                {{$products}}

                <br>
                Formulario de edicion de  producto:
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



                <form method="POST"  action=" {{ url('/admin/products/'.$products->id.'/edit') }} ">
                     {{ csrf_field() }}
                    
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value=" {{ $products->name }} ">
                    <br>
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $products->description }}">
                    <br>
                    <label for="">Long description</label>
                    <input type="text" name="long_description" class="form-control" value="{{ $products->long_description }}" >
                    <br>
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $products->price }}">
                    <br>
                    <button class="btn btn-success"><i class="fas fa-edit"></i> Modificar</button>
                </form>
                 <br>
                <a href=" {{ url('/admin/products') }} "><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> Volver</button></a>
                
            </div>

        </div>

    
    </div>


@endsection
