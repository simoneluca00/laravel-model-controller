@extends('layout.layout')

@section('title', 'Home')

@section('content')

    <div class="row row-cols-4 g-3 mt-5">
        @forelse ($movies as $movie)

        <div>
            <div class="card col">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $movie->original_title }}</h5>
                    <h6 class="card-subtitle">{{ $movie->title }}</h6>
                    <a href="{{ route('movie', [ 'id' => $movie->id ]) }}" class="card-link btn btn-primary mt-5 align-self-end">Vedi Info</a>
                    
                </div>
            </div>
        </div>


        @empty
        <p>Non sono presenti film</p>
        @endforelse
    </div>
@endsection