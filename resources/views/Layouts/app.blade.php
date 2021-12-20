<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style lang="scss">
    a {
        text-decoration: none;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    #site_header a {
        font-weight: bold;
    }

    .input {
        border: none;
        border-bottom: 1px solid rgb(2, 130, 249);
        text-align: end;
        width: 130px;
    }

    .blue {
        background-color: rgb(2, 130, 249);
        color: white;
        text-align: end;
    }

    .important {
        color: rgb(2, 130, 249);
    }

    .comics {
        background-color: rgb(28, 28, 28);
    }

    .comics .card {
        background-color: rgb(28, 28, 28);
    }

    .card img {
        object-fit: cover;
        object-position: top;
        height: 200px;
        margin: 1rem;
    }

    .card p {
        margin-left: 1rem;
        font-weight: bold;
    }

    .jumbotron {
        height: 410px;
        background-image: url('../img/jumbotron.jpg')
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

    #site_main {
        padding: 0 !important;
    }

    #site_footer {
        background-color: rgb(48, 48, 48);
    }

    footer button {
        border: 1px solid rgb(2, 130, 249);
        color: white;
        background-color: rgb(48, 48, 48);
        padding: 1rem;

    }

    .list {
        background-size: cover;
        height: 500px;
        background-image: url('../img/footer-bg.jpg');
        background-repeat: no-repeat;
        background-position: center;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    .sx {
        display: flex;
        flex-direction: row;
        margin-top: 5rem;
    }

    .sx ul {
        list-style: none;
        color: #8f8f90;
        display: flex;
        flex-direction: column;
        margin: 1rem;
        height: max-content;
    }

    .sx .LIF {
        color: white;
        font-size: 20px;
        padding: 5px 0;
    }

    .sx li {
        line-height: 25px;
    }


    .dx {
        background-image: url('../img/dc-logo-bg.png');
        background-position: right;
        width: 562px;
        background-repeat: no-repeat;
    }

    .W_1 {
        width: 200px;
        border: none;
        Position: absolute;
        top: 50%;
        left: 20%;
        background-color: transparent;
        z-index: 1;
    }

    .C_img {
        border: 1px solid white;
    }

    .com {
        position: absolute;
        top: 7%;
        color: white;
        background: rgb(0, 169, 217);
        width: 50%;
        text-align: center;
        font-weight: 100 !important;
    }

    .gallery {
        position: absolute;
        top: 83%;
        color: white;
        background: rgb(0, 169, 217);
        text-align: center;
        font-weight: 100 !important;
        width: 169px;
    }

    .blueline {
        position: relative;
        height: 100px;
        background-color: rgb(2, 130, 249);
    }

    .green {
        color: rgb(137, 229, 117)
    }

    .bg_green {
        background: rgb(85, 186, 89)
    }

    .col-10 {
        border-right: 1px solid grey;
    }

    .col-4 {
        text-align: end;
    }

    .bg_green p {
        margin: 1rem;
        color: white;

    }

    H4 {
        margin-bottom: 3rem;
    }

    .bg_grey {
        background: rgb(246, 246, 246);
    }

    .and {
        color: rgb(0, 169, 223)
    }

    .U {
        text-transform: uppercase
    }

    .BL {
        color: rgb(0, 63, 94)
    }

    .B_B {
        border-top: 1px solid lightgrey;
        border-bottom: 1px solid lightgrey;
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