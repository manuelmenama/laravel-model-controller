@extends('layout.main')

@section('content')

<div class="container">
    <h1>Your Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)

            <div class="col-4">
                <a class="my-movie-link" href="{{ route('movie-detail', $movie->id) }}">
                    <h4>{{ $movie->title }}</h4>

                </a>

            </div>
        @endforeach
    </div>
</div>

@endsection
