<?php 
$navLinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
?>

<header>
    <div class="blue_nav">
        <div class="container d-flex justify-content-end gap-5">
            <a href="#">dc something</a>
            <a href="#">more dc smthg</a>
        </div>
    </div>
    <div class="white_nav py-3">
        <div class="container d-flex justify-content-between align-items-center">
            {{-- logo --}}
            <div class="logo_container">
                <a href="{{route('home')}}"><img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="" class="img-fluid"></a>
            </div>
            {{-- link list --}}
            <ul class="list-unstyled d-flex gap-3 mb-0">
                @foreach ($navLinks as $link)
                    {{-- doesn't throw error if page doesn't exist --}}
                    @if(Route::has($link . '.index'))
                        <li>
                            <a 
                            href="{{route($link . '.index')}}"
                            class="{{Route::currentRouteName() === $link ? 'active' : ''}}">
                            {{$link}}</a>
                        </li>
                    @else
                        <li><a href="#">{{$link}}</a></li>
                    @endif
                @endforeach
            </ul>
            {{-- searchbar --}}
            <input type="search" name="" id="">
        </div>
    </div>
    <div class="jumbo">
        <img src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="" class="img-fluid">
    </div>
</header>