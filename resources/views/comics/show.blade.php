@extends('layouts.app')

@section('content')
    <!--Section Card-->
    <div class="container p-4 ">
        <div class="d-flex justify-content-center">
            <div class="card " style="width: auto; height:auto;">
                <span class="text-center p-1">
                    <img src="{{ $comic->thumb }}"class="card-img-top text-center " style="width: 30rem; height:30rem;" alt="...">
                </span>
                <div class="card-body">
                    <p class="card-text"><strong>{{ $comic->title }}</strong></p>
                    <p><strong>Genere: </strong>{{ $comic->type }}</p>
                    <p><strong>Description:</strong> {{ $comic->description }}</p>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Ritorna alla pagina principale</a>

                </div>
            </div>

        </div>
    </div>
@endsection
