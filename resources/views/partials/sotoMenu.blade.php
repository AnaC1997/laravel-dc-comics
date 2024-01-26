<div class="styleInfoMain">
    @foreach ($infoComic as $comic)
        <div class="cardInfo">
        <img class="imgInfo" src="{{ asset('images/' . $comic['img']) }}" alt="{{ $comic['text'] }}">
            <p class="infoText">{{ $comic['text'] }}</p>
        </div>
    @endforeach
</div>