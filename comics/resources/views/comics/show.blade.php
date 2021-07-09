@extends('layout.app')

@section('title', 'Comic Page')

@section('content')
<h1>Comic Page</h1>

<div class="comic">
    <img src="{{$comic['thumb']}}" alt="">
    {{$comic['title']}}
</div>

@endsection