@extends('layouts.app')

@section('content')
    <!--Section Card-->
    <div class="container">
        <h1 class="text-center"><strong>Benvenuto</strong></h1>
        <div class="row">
            @foreach ($comics as $card)
                <div class="col-3">
                    <div class="card mb-3" style="width: 20rem; height: 40rem;">
                        <img src="{{ $card->thumb }}" class="card-img-top " alt="..." style=" height: 23rem;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $card->title }}</strong></h5>
                            <p class="card-text"><strong>Prezzo:</strong> €{{ $card->price }}</p>
                            <p class="card-text"><strong>Data di vendita:</strong> {{ $card->sale_date }}</p>
                            <p class="card-text"><strong>Genere: </strong> {{ $card->type }}</p>
                            <span class="d-flex gap-2 ">
                                <a href="" class="btn btn-primary ">Dettagli</a>
                                <a href="" class="btn btn-warning ">Modifica</a>
                                <form method="POST" class="d-inline-block">
                                    <input type="submit" value="Cancella" class="btn btn-danger">
                                </form>
                            </span>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
