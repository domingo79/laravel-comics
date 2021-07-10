@extends('layout.app')

@section('title', 'Comics Page')

@section('content')

<section class="container">
    <h2>Current Series</h2>

    <div class="cards_content">
        @foreach($comics as $index => $comic)
        <div class="card">
            <div class="card_image">
                <a href="{{route('comic',['id' => $index])}}">

                    <img src="{{$comic['thumb']}}" alt="">
                </a>
            </div>
            <div class="card_title">
                <h5>{{ $comic['series']}}</h5>
            </div>
        </div>
        @endforeach
    </div>

    <div class="btn">
        <button class="btn_full">Load more</button>
    </div>

</section>

<section class="icone">
    <div class="container">
        <ul>
            <li><img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">digital comics</li>
            <li><img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">dc merchandise</li>
            <li><img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">subscription</li>
            <li><img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">comic shop locator</li>
            <li><img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">dc power visa</li>
        </ul>
    </div>
</section>


@endsection