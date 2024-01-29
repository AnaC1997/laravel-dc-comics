

<div class="container m-5">
    <div class="row">
        @foreach ($comics as $card)
            <div class="col-3">
                <div class="card mb-3" style="width: 19rem; height: 30rem;">
                    <img src="{{ $card->thumb }}" class="card-img-top " alt="..." style=" height: 14rem;">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $card->title }}</strong></h5>
                        <p class="card-text"><strong>Prezzo:</strong> €{{ $card->price }}</p>
                        <p class="card-text"><strong>Data di vendita:</strong> {{ $card->sale_date }}</p>
                        <p class="card-text"><strong>Genere: </strong> {{ $card->type }}</p>
                        <span >
                            <a href="{{ route('comics.show', $card->id) }}" class="btn btn-primary ">Dettagli</a>
                        </span>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
</div>
