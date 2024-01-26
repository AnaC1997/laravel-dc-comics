<nav>
    <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
    <div class="styleMenuLinks">
        @foreach ($menuLinks as $link)
        <a href="{{ $link['url'] }}">{{ $link['text'] }} </a>
        @endforeach
    </div>
</nav>