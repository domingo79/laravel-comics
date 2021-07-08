@extends('layout.app')

@section('title', 'Comics')

@section('content')

<section class="container">

    @foreach($comics as $comic)
    <img src="{{$comic['thumb']}}" alt="">
    <h3>{{ $comic['series'] }}</h3>
    @endforeach

</section>


@endsection