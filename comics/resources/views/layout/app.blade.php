<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/2c30adbff5.js" crossorigin="anonymous"></script>
    <title>DC @yield('title', 'Comics')</title>

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

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
            @foreach(config('comics.menu') as $item)
            <a href="{{route($item['href'])}}" class="{{Route::currentRouteName() === $item['href'] ? 'active' : ''  }}"> {{$item['text']}} </a>
            @endforeach
            <input type="text" name="" id="" placeholder="Serch"><i class="fas fa-search"></i>
        </nav>

        <div class="jumbo_heder">
            <!-- img  -->
        </div>
    </header>

    <main id="main_content">
        @yield('content')
    </main>

    <footer id="site_footer">

    </footer>

</body>

</html>