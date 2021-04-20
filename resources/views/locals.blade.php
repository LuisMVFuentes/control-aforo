@extends('template')

@section('title', $title)

@section('content')
<div class="container">
    <h1 class="mt-5">{{ $title }}</h1>
    <br>
    <div class="card container">
        <div class="card-body">
            <form action="#">
                <div class="form-group">
                    <label for="inputSearch">Introduzca Palabra</label>
                    <input type="text" class="form-control" id="inputSearch" aria-describedby="searchHelp">
                    <small id="searchHelp" class="form-text text-muted">Introduzca una palabra para iniciar la busqueda.</small>
                </div>

                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
    <br>
    <div class="card-deck">
        @forelse($locals as $local)
        <div class="card">
            <div class="card-img-top">
                <iframe width="100%" height="250" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1400.588569645198!2d-79.93599497974716!3d-6.834994752972642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9872f6a6553fcf1!2sMercado%20de%20Pimentel!5e0!3m2!1ses!2spe!4v1618893170428!5m2!1ses!2spe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <div class="card-body">

                <h5 class="card-title">
                    <a class="card-link" href="{{ url("/Locals/$local->idLocal") }}">{{ $local->nombreLocal }} <i class="bi bi-link-45deg"></i></a>
                </h5>
                <p class="card-text">{{ $local->descripcion }}</p>
                <p class="card-text"><small class="text-muted">Ultima Actualización hace 3 minutos</small></p>
            </div>
        </div>
        @empty
        <p>No hay elementos que mostrar</p>
        @endforelse
    </div>
    <!-- {{ url('/locals/'.$local->idLocal) }} -->


</div>


@endsection