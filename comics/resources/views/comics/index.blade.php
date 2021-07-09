@extends('layout.app')

@section('title', 'Comics Page')

@section('content')
<h1>Comics Page</h1>

<section class="container">

    <div class="cards_content">
        @foreach($comics as $index => $comic)
        <div class="card">
            <div class="card_image">
                <a href="{{route('comic',['id' => $index])}}">

                    <img src="{{$comic['thumb']}}" alt="">
                </a>
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