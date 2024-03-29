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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    @stack('css')

    <!-- Scripts -->
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
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
            width: 120px;
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

        .search {
            margin-right: 500px;
        }

        .search .form-inputs {
            width: 30%;
            position: absolute;

        }

        .search .glass {
            position: absolute;
            margin-left: 410px;
            margin-top: -34px;
            color: #1f4975;
            font-size: 20px;
        }

        .shop-bag {

            font-size: 28px;
            color: #1f4975;
        }

        .submit .btn {
            background: #0d468e;
            margin-top: 10px;
        }

        .total_deg {
            font-size: 20px;
            padding: 40px;
        }

        .total-price span {
            color: #f16038;


        }

        .total-price h4 {
            color: #1f4975;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md  fixed-top navbar-light bg-white shadow-sm " id="tab-navbar">
        <div class="container">
            <a href="/" class="navbar-brand">
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
                        @if (Auth::user()->hasRole('Vendor'))
                            {{-- <li><a class="nav-link" href="{{ route('admin.index') }}">Report</a></li> --}}
                            <li><a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}"
                                    href="{{ route('admin.chart') }}">Report</a></li>
                            <li><a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}"
                                    href="{{ route('admin.showorder') }}"> Orders</a></li>
                            <li><a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}"
                                    href="{{ route('products.index') }}"> Product</a></li>
                            <li><a class="nav-link{{ Request::segment(1) == '' ? 'active' : '' }}"
                                    href="{{ route('productcategory.index') }}"> Product Category</a></li>
                        @elseif(Auth::user()->hasRole('Admin'))
                            <li><a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}"
                                    href="{{ route('roles.index') }}">Roles</a></li>
                            <li><a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}"
                                    href="{{ route('users.index') }}">Users</a></li>
                        @elseif(Auth::user()->hasRole('Technician'))
                            <li><a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}"
                                    href="{{ route('technician.hire') }}">Hires</a></li>
                        @else
                            <div class="search"
                                style="position: absolute;
                            z-index: 9999;
                            margin-left: 640px;
                            margin-top: 30px;">
                                <ul class="navbar-nav">
                                    <div class="row">

                                        <div class="col-md-2 col-lg-2">
                                            <div class="d-flex d-none mt-4 d-md-flex flex-row align-items-center">
                                                <li class="nav-item" style="position: absolute;margin-left:400px;">
                                                    <a class="nav-link " href="{{ url('showcart') }}">
                                                        <span class="shop-bag"><i
                                                                class="fa-solid fa-cart-shopping"></i></span>
                                                        [ {{ $count }} ]
                                                    </a>
                                                </li>

                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        @endif
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

                                {{-- <a class="dropdown-item" href="{{ route('productcategory.index') }}"> Product Category</a> --}}
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

    @yield('content')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-teletype-plugin/0.1.6/jquery.teletype.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}


    <script type="text/javascript" src="{{ asset('user/js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>

    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_e235dccf7a894101ac91f143828e89db",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",

            ],
            "eventHandler": {
                onSuccess(payload) {

                    // hit merchant api for initiating verfication
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('khalti.verifypayment') }}",
                        data: {
                            token: payload.token,
                            amount: payload.amount,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            $.ajax({
                                type: 'POST',
                                url: "{{ route('khalti.storepayment') }}",
                                data: {
                                    response: res,
                                    "_token": "{{ csrf_token() }}"
                                }
                            });
                            console.log(res);
                        }
                    });
                    console.log(payload);

                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function() {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({
                amount: 1000
            });
        }
    </script>
    @stack('js')
</body>

</html>
