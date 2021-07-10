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
             <div class="search">
                 <input type="text" name="" id="" placeholder="Serch"><i class="fas fa-search"></i>
             </div>
         </nav>

         <div class="jumbo_heder">
             <!-- img  -->
         </div>
     </header>