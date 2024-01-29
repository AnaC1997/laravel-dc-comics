<header class="container">
    <nav class=" d-flex align-items-center justify-content-between">
        <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
        <div class="styleMenuLinks">
            @foreach ($menuLinks as $link)
            <a class="p-3" href="{{ $link['url'] }}">{{ $link['text'] }} </a>
            @endforeach
        </div>
    </nav>
</header>
