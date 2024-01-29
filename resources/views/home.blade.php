@extends('layouts.app')
@section('content')
 
    <!--Main-->
    <main>
        <section class="sectionJumbotron">
            <div>
                <img class="imgJumbotrom" src="{{ asset('images/jumbotron.jpg') }}" alt="jumbotron">
                <button class="bCurrent btn btn-primary">CURRENT SERIES</button>
                @include ('partials.card')
                <span>
                    <button class="btn btn-primary mb-4">LOAD MORE</button>
                </span>
            </div>
        </section>
        @include('partials.sotoMenu')
    </main>

@endsection
