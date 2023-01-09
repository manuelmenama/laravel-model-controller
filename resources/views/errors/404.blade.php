@extends('layout.main')

@section('content')

<h1>Errore 404</h1>

<h3>
    {{$exception->getMessage()}}
</h3>

@endsection
