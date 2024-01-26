@extends('layouts.app')
@include('partials.header')
@section('content')
<section class="sectionJumbotron">
    <div>
        <img class="imgJumbotrom" src="{{ asset('images/jumbotron.jpg')}}" alt="jumbotron">
        <button class="bCurrent btn">CURRENT SERIES</button>

        <p>CAMPO CARD</p>
        <span class="btn_loadM">
            <button class="btn">LOAD MORE</button>
        </span>
    </div>
</section>
@include('partials.sotoMenu')
@include('partials.footer')



