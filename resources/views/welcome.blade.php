@extends('layouts.app')
@section('page-title', 'homepage')

@section('content')
<div class="jumbotron">
</div>
<div class="comics">
    <div class="container">
        <div class="row gy-4">
            @foreach($comics as $comic)
            <div class="col-2">

                <div class="card ">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p class="bold text-white">{{ $comic['series'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="buy">
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""><span>DIGITAL COMICS</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt=""><span>DC MERCHANDISE</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt=""><span>SUBSCRIPTIONS</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt=""><span>COMIC SHOP LOCATOR</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt=""><span>DC POWER VISA</span>
    </div>
</div>
<div class="list d-flex ">
    <div class="sx">
        <ul>
            <li class="LIF">DC COMICS</li>
            <li>Characters</li>
            <li>Comics</li>
            <li>Movies</li>
            <li>TV</li>
            <li>Games</li>
            <li>Videos</li>
            <li>News</li>
            <li class="LIF">SHOP</li>
            <li>Shop DC</li>
            <li>Shop DC Collectibles</li>
        </ul>
        <ul>
            <li class="LIF">DC</li>
            <li>Terms Of Use</li>
            <li>Privacy policy(New)</li>
            <li>Ad Choices</li>
            <li>Advertising</li>
            <li>Jobs</li>
            <li>Subscriptions</li>
            <li>Talent Workshops</li>
            <li>CPSC Certificates</li>
            <li>Ratings</li>
            <li>Shop Help</li>
            <li>Contact Us</li>
        </ul>
        <ul>
            <li class="LIF">SITES</li>
            <li>DC</li>
            <li>MAD Magazine</li>
            <li>MDC Kids</li>
            <li>DC Universe</li>
            <li>DC Power Visa</li>
        </ul>
    </div>
    <div class="dx"></div>
</div>

@endsection