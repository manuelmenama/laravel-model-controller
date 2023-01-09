@extends('layout.main')

@section('content')

<div class="container">
    <h1>Movie Detail</h1>
    <div class="row">
        <div class="col-12">
            <h2>{{$movie->title}}</h2>
            <h5><small>Original title:</small> {{$movie->original_title}}</h5>
            <ul>
                <li>Date: {{$movie->date}}</li>
                <li>Nationality: {{$movie->nationality}}</li>
                <li>Vote: {{$movie->vote}}</li>
            </ul>
        </div>
    </div>
</div>

@endsection
