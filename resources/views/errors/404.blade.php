@extends('template')


@section('title', '404 ERROR')

@section('content')


<div class="container">
    <div class=" row align-items-center justify-content-center vh-100">
        <div class="col sm-6 text-center">
            <h1><img src="img/control-af.png" width="15%" height="15%"> Error 404</h1>
            <br>
            <a href="{{ route('home')}}" class="btn btn-primary">Regresar a Inicio</a>
        </div>
    </div>
</div>
@endsection