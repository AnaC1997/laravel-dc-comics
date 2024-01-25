@extends('layouts.app')

@section('content')
<!--Section Card-->
<section class="containerCard">
    @foreach ($comics as $card)
        <div class="card">
            <img class="imgCard" src="{{ $card->thumb }}" alt="#">
            <p>{{ $card->title }}</p>
            <p>{{ $card->series }}</p>
            <p>{{ $card->type}}</p>
        </div>
    @endforeach
</section>
@section('content')