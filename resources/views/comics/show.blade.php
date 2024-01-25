@extends('layouts.app')

@section('content')
    <!--Section Card-->
    <div class="containerCard">
        <div class="card">
            <img class="imgCard" src="{{ $comic->thumb }}" alt="#">
            <p>Titulo:{{ $comic->title }}</p>
            <p>Tipo di serie: {{ $comic->series }}</p>
            <p>{{ $comic->type }}</p>
        </div>
    </div>
@endsection
