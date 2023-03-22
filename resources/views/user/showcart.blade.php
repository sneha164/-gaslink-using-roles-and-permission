<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GasLink') }}</title>



    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="icon" type="image/icon" href="{{ asset('user/images/fire.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('css')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .collapse .navbar-nav .nav-link {

            color: #355c9c;
            font-size: 22px;
            font-weight: 600;
            margin-right: 20px;

        }

        main {
            margin-top: 120px;
        }

        .collapse .navbar-nav .dropdown .nav-link {
            color: white !important;
            background-color: rgb(241 96 56);
            border-radius: 10px;
        }

        .collapse .navbar-nav .dropdown {
            margin-left: 20px;
        }

        .collapse .navbar-nav .dropdown .dropdown-item {
            color: #355c9c;
            font-size: large;
            font-weight: 600;
            margin-left: 20px;
        }

        .collapse table {
            background-color: #ffffff;
        }

        body {
            background: #f6f6f6;
        }

        p {
            margin-top: 10;
        }

        .pull-left h2 {
            color: rgb(241 96 56);
            text-align: center;
            font-weight: 600;
        }

        .pull-right .btn {
            background-color: #355c9c;
            margin-bottom: 5px;
        }

        .table .bg-dark {
            background: #0d468e !important;
        }



        .shop-bag {

            font-size: 28px;
            color: #1f4975;
        }

        .submit .btn {
            background: #0d468e;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md  fixed-top navbar-light bg-white shadow-sm ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <div data-aos="flip-up">
                    <img src="{{ asset('user/images/Logo.jpg') }}" alt="logo" style="height: 80px">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="search">
                            <ul class="navbar-nav">
                                <div class="row">
                                    {{-- <div class="col-md-8 col-lg-8" style="margin-right: 80px">
                                        <div class="d-flex form-inputs">
                                            <form method="get" action="/home" style="width: 100%">
                                                <input class="form-control" name="search" type="text"
                                                    placeholder="Search any product..." value="{{ request('search') }}">
                                                <span class="glass"> <i class="fa-solid fa-magnifying-glass"></i> </span>
                                            </form>
                                        </div>
                                    </div> --}}


                                    <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                        <li class="nav-item mt-5" style="position: absolute;margin-left:-80px;">
                                            <a class="nav-link " href="{{ url('showcart') }}">
                                                <span class="shop-bag"><i class="fa-solid fa-cart-shopping"></i></span>
                                                [ {{ $count }}]
                                            </a>
                                        </li>

                                    </div>

                                </div>
                            </ul>
                        </div>

                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="fas fa-user"></span> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <span class="fas fa-sign-in-alt"></span>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>
    <div class="mt-5" style="padding:100px;">
        <div class="pull-left">
            <h2>My Cart</h2>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">

                {{ session()->get('message') }}
            </div>
        @endif

        <table class="table table-bordered bg-white">
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th width="280px">Action</th>
            </tr>
            <form action="{{ url('order') }}" method="POST">
                @csrf
                @foreach ($cart as $carts)
                    <tr>
                        <td>
                            <input type="text" name="productname[]" value=" {{ $carts->product_title }}"
                                hidden="">
                            {{ $carts->product_title }}
                        </td>
                        <td>
                            <input type="text" name="quantity[]" value=" {{ $carts->quantity }}" hidden="">
                            {{ $carts->quantity }}
                        </td>
                        <td>
                            <input type="text" name="price[]" value=" {{ $carts->price }}" hidden="">
                            {{ $carts->price }}
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ url('delete', $carts->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                <input type="submit" name="Confirm Order" class="btn btn-success mb-2">
                
            </form>
        
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-teletype-plugin/0.1.6/jquery.teletype.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('user/js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    @stack('js')
</body>

</html>
