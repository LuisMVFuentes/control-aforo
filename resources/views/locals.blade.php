@extends('template')

@section('title', 'Locals')

@section('content')
    <div class="container">
    <h1 class="mt-5">¿En que consiste?</h1>
        @forelse($locals as $local)
            <p>{{ $local }}</p>
        @empty
            <p>No hay elementos que mostrar</p>
        @endforelse
    </div>
        <!-- @if (!empty($users))
            @foreach ($locals as $local)
                <li>{{ $local }}</li>
            @endforeach
        @else
            <p>No hay elementos</p>
        @endif -->


@endsection