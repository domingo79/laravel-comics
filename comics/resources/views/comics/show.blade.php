@extends('layout.app')

@section('title', 'Comic Page')

@section('content')

<div class="comic">
    <div class="comic_image">
        <span>{{$comic['type']}}</span>
        <img src="{{$comic['thumb']}}" alt="">
        <span>VIEW GALLERY</span>
    </div>
    <div class="container">
        <div class="comic_content">
            <h3> {{$comic['title']}}</h3>

            <div class="row_table">
                <span>U.S. Price: {{$comic['price']}}</span>
                <span>AVAILABLE</span>
                <span>Chek Availability <i class="fas fa-caret-down"></i> </span>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="comic_advertisement">
            <h3>ADVERTISEMENT</h3>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>
<div class="scheda">
    <div class="container">
        <div class="scheda_body talent">
            <h3>Talent</h3>
            <hr>
            <div class="etichetta">Art by:</div>
            <ul>
                @foreach($comic["artists"] as $artist)
                @if(!$loop->last)
                <li>
                    <a href="#">{{ $artist }},&nbsp;</a>
                </li>
                @else
                <li>
                    <a href="#">{{ $artist }}</a>
                </li>
                @endif
                @endforeach
            </ul>
            <hr>
            <div class="etichetta">Written by:</div>
            <ul>
                @foreach($comic['writers'] as $writer)
                @if(!$loop->last)
                <li>
                    <a href="#">{{$writer}},&nbsp;</a>
                </li>
                @else
                <li>
                    <a href="#">{{$writer}}</a>
                </li>
                @endif
                @endforeach

            </ul>
            <hr>
        </div>
        <div class="scheda_body specs">
            <h3>Specs</h3>
            <hr>
            <div class="etichetta">Series:</div>
            <ul>
                <li><a href="#">{{$comic['series']}}</a></li>
            </ul>
            <hr>
            <div class="etichetta">U.S. Price:</div>
            <ul>
                <li>{{$comic['price']}}</li>
            </ul>
            <hr>
            <div class="etichetta">On Sale Date:</div>
            <ul>
                <li>{{$comic['sale_date']}}</li>
            </ul>
            <hr>
        </div>
    </div>
    <div class="scheda_footer">
        <span>DIGITAL COMIC <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""></span>
        <span>SHOP DC <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""></span>
        <span>COMIC SHOP LOCATOR <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""></span>
        <span>SUBSCRIPTION <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""></span>
    </div>
</div>
@endsection