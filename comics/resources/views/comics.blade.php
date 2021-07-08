@extends('layout.app')

@section('title', 'Comics')

@section('content')

<section class="container">

    <div class="cards_content">
        @foreach($comics as $comic)
        <div class="card">
            <div class="card_image">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <div class="card_title">
                <h5>{{ $comic['series'] }}</h5>
            </div>
        </div>
        @endforeach
    </div>

    <div class="btn">
        <button class="btn_full">Load more</button>
    </div>

</section>


@endsection