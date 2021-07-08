<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/2c30adbff5.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'Comics')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <header id="site_header">

        <div class="top_header">
            <span>DC POWER VISA&reg;</span>
            <span>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i> </span>
        </div>


        <nav class="menu">
            <!-- image -->
            <div class="logo">
                <img src="{{asset('img/dc-logo.png')}}" alt="">
            </div>
            <a href="{{ route('characters')}}" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">characters</a>
            <a href="{{ route('comics')}}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">comics</a>
            <a href="{{ route('movies')}}" class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">movies</a>
            <a href="{{ route('tv')}}" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">tv</a>
            <a href="{{ route('games')}}" class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">games</a>
            <a href="{{ route('collectibles')}}" class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">collectibles</a>
            <a href="{{ route('video')}}" class="{{ Route::currentRouteName() === 'video' ? 'active' : '' }}">video</a>
            <a href="{{ route('fans')}}" class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">fans</a>
            <a href="{{ route('news')}}" class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">news</a>
            <a href="{{ route('shop')}}" class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">shop<i class="fas fa-caret-down"></i></a>
            <input type="text" name="" id="" placeholder="Serch"><i class="fas fa-search"></i>
        </nav>

        <div class="jumbo_heder">
            <!-- img  -->
        </div>
    </header>

    <main id="main_content">
        @yield('content')
    </main>

    <footer id="site_footer"></footer>

</body>

</html>