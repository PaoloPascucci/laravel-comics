@extends('layouts.app')
@section('page-title', 'homepage')

@section('content')
<div class="jumbotron">
</div>
<div class="comics">

</div>
<div class="buy">
    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""><span>DIGITAL COMICS</span>
    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt=""><span>DC MERCHANDISE</span>
    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt=""><span>SUBSCRIPTIONS</span>
    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt=""><span>COMIC SHOP LOCATOR</span>
    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt=""><span>DC POWER VISA</span>
</div>
@endsection