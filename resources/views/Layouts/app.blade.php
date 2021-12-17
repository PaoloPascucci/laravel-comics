<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
    .container {
        width: 80%;
        margin: auto;
    }

    .jumbotron {
        height: 300px;
        background-image: url('img/jumbotron.jpg')
    }

    .follow {
        color: blue;
    }

    .text-bottom {
        margin: 20px 1rem 0 0;
    }

    .buy {
        background-color: rgb(2, 130, 249);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .links img {
        margin: 1rem;
    }

    .buy img {
        height: 50px;
        margin: 1rem;
    }

    #site_footer {
        background-image: url('img/footer-bg.jpg');
    }
    </style>
    <!-- CUSTOM CSS -->
    @yield('custom-css')
</head>

<body>


    @include('Factors.header')

    <!-- /#site_header -->
    <main id="site_main" class="py-5">
        @yield('content')
    </main>
    <!-- /#site_main -->

    @include('Factors.footer')

    <!-- /#site_footer -->


    <!-- CUSTOM SCRIPTS -->
    @yield('custom-js')

</body>

</html>