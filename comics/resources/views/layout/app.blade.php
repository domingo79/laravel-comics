<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/2c30adbff5.js" crossorigin="anonymous"></script>
    <title>DC @yield('title', 'Comics')</title>
    <!-- favicon  -->
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
        <div class="footer_row_top">
            <div class="container">
                <div class="col_sx">
                    <div class="col_link">
                        <h2>DC COMICS</h2>
                        <ul>
                            @foreach(config('comics.menu') as $item)
                            <li>{{$item['text']}}</li>
                            @if ($item['text'] === 'News')
                            @break
                            @endif
                            @endforeach
                        </ul>
                        <h2>SHOP</h2>
                        <ul>
                            <li>Shop DC</li>
                            <li>Shop DC Collectibles</li>
                        </ul>
                    </div>
                    <div class="col_link">
                        <h2>DC</h2>
                        <ul>
                            <li>Terms Of Use</li>
                            <li>Privacy Policy (New)</li>
                            <li>Ad Choices</li>
                            <li>Advertising</li>
                            <li>Jobs</li>
                            <li>Subscription</li>
                            <li>Talent Workshops</li>
                            <li>CPSC Certificates</li>
                            <li>Ratings</li>
                            <li>Shop Help</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class="col_link">
                        <h2>CITES</h2>
                        <ul>
                            <li>DC</li>
                            <li>MAD Magazine</li>
                            <li>DC Kids</li>
                            <li>DC Universe</li>
                            <li>DC Power Visa</li>
                        </ul>
                    </div>
                    <div class="col_link_down">
                        <p>All Site TM and &copy; 2020 DC Entartainment, unless otherwise <a href="#">noted here.</a>All rights reserved. <a href="#">Cookies Settings</a></p>
                    </div>
                </div>
                <div class="col_dx"></div>

            </div>
        </div>
        <div class="footer_row_down">
            <div class="container">
                <div class="sing_up">
                    <button>SING-UP NOW</button>
                </div>
                <div class="follow">

                    <ul>
                        <li><span>FOLLOW US</span></li>
                        <li> <img src="./img/footer-facebook.png" alt=""></li>
                        <li> <img src="./img/footer-twitter.png" alt=""></li>
                        <li> <img src="./img/footer-youtube.png" alt=""></li>
                        <li> <img src="./img/footer-pinterest.png" alt=""></li>
                        <li> <img src="./img/footer-periscope.png" alt=""></li>
                    </ul>
                </div>

            </div>
        </div>


    </footer>

</body>

</html>