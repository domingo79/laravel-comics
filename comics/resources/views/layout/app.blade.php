<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Comics')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <header id="site_header">
        <!-- image -->
        <div class="logo">
            <!-- <img src="{{asset('img/marchio-sito-test.png')}}" alt=""> -->
        </div>
        <nav class="menu">
            <a href="{{ route('characters') }}">characters</a>
            <a href="{{ route('comics') }}">comics</a>
            <a href="{{ route('movies') }}">movies</a>
            <a href="{{ route('tv') }}">tv</a>
            <a href="{{ route('games') }}">games</a>
            <a href="{{ route('collectibles') }}">collectibles</a>
            <a href="{{ route('video') }}">video</a>
            <a href="{{ route('fans') }}">fans</a>
            <a href="{{ route('news') }}">news</a>
            <a href="{{ route('shop') }}">shop</a>
        </nav>

    </header>

    <main id=" main_content">
        @yield('content')
    </main>

    <footer id="site_footer"></footer>

</body>

</html>