{{-- SHOW è la pagina che restituisce la stampa specifica di ogni item --}}
@extends('layout.layout')

@section('title', 'Movie')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-bold">
                <span class="text-danger">Titolo originale</span>
                {{ $movie->original_title }}
            </h5>
            <h6 class="card-subtitle fw-bold">
                <span class="text-danger">Traduzione titolo:</span>
                {{ $movie->title }}
            </h6>
            <p class="card-text mt-4 mb-1">
                <span class="text-danger fw-bold">Nazionalità:</span>

                @if ($movie->nationality === 'american')
                    USA
                @endif

                @if ($movie->nationality === 'american/british')
                    USA / UK
                @endif
            </p>
            <p class="card-text my-1">
                <span class="text-danger fw-bold">Data di uscita:</span>
                {{ $movie->date }}
            </p>
            <p class="card-text my-1">
                <span class="text-danger fw-bold">Voto</span>
                {{ $movie->vote }}
            </p>
        </div>
    </div>
</div>
@endsection
