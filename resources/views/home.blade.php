@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Tu estas logeado!!
                    <hr>
                    <label>Ingresa tu nombre</label>
                    <br>
                    <input type="text" class="form-control">
                    <br> 
                    <button class="btn btn-success">Enviar</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
