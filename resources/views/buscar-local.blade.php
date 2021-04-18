@extends('template')

@section('content')
<div class="container">
    <h1 class="mt-5">Buscar Centros Vinculados</h1>
    <div class="card container">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="inputSearch">Introduzca Palabra</label>
                    <input type="text" class="form-control" id="inputSearch" aria-describedby="searchHelp">
                    <small id="searchHelp" class="form-text text-muted">Introduzca una palabra para iniciar la busqueda.</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
</div>
@stop