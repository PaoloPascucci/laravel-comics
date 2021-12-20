@extends('Layouts.app')

@section('page-title', 'Comic')

@section('content')

<div class="card W_1">
    <img src="{{$comic['thumb']}}" alt="">
    <p class="bold">{{ $comic['series']}}</p>
</div>

@endsection