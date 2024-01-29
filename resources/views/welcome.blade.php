<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <title>GasLink</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initia-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/icon" href="{{ asset('user/images/fire.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('css')
</head>

<body>
    <section class="navigation">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a href="#" class="navbar-brand">
                        <div data-aos="flip-up">
                            <img src="{{ asset('user/images/Logo.jpg') }}" alt="logo">
                        </div>
                    </a>
                    <div class="home">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3">
                                <a href="#" class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}">
                                    Home

                                </a>

                            </li>

                            <li class="nav-item mx-3">
                                <a href="{{ route('user.about') }}"
                                    class="nav-link {{ Request::segment(1) == 'about' ? 'active' : '' }}">
                                    About
                                </a>
                            </li>
                            <li class="nav-item mx-3">
                                <a href="{{ route('user.benefits') }}"
                                    class="nav-link {{ Request::segment(1) == 'benefits' ? 'active' : '' }}">
                                    Benefits
                                </a>
                            </li>

                            <li class="nav-item mx-3">
                                <a href="{{ route('user.services') }}"
                                    class="nav-link {{ Request::segment(1) == 'services' ? 'active' : '' }}">
                                    Services

                                </a>

                            </li>


                            <li class="nav-item mx-3">
                                <a href="{{ route('user.contact') }}"
                                    class="nav-link {{ Request::segment(1) == 'contact' ? 'active' : '' }}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="log">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('register') }}"><span class="fas fa-user"></span> Sign
                                Up</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span>
                                Login</a>
                        </li>
                    </div>
                </div>

        </nav>
    </section>
    <!--section navigation end-->
    <!--section background starts-->
    <section class="background">
        <div data-aos="fade-up">
            <div class=" p-5 text ">

                <h1>
                    Order your gas in
                    <span class="type"></span>
                </h1>
                <ul class="mt-3">
                    <li>
                        <i class="fa-solid fa-clock mx-1"></i>
                        <h4>24/7</h4>
                    </li>
                    <li>
                        <i class="fa-solid fa-mobile-button mx-2"></i>
                        <h4>Easy</h4>
                    </li>
                    <li>
                        <i class="fa-solid fa-thumbs-up mx-5"></i>
                        <h4> Convenient</h4>
                    </li>
                </ul>
                <div class="bottom mt-4" style="height: 50px;">
                    <a class="nav-link" href="{{ route('login') }}"> Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--section background ends-->
    <!--section banner starts-->
    <section class="banner " id="tab-about">
        <div class="container p-5 pb-0 ">
            <div class="row">
                <div class=" text col-lg-4 col-md-6 col-sm-12">
                    <div data-aos="fade-up">
                        <h1 class="text-center">
                            About
                            <span> Us</span>
                        </h1>
                    </div>
                    <div data-aos="fade-up">
                        <p style="text-align:justify">

                            LPG or Liquefied Petroleum Gas is the most widely used cooking gas. The government of Nepal
                            also subsidizes the cost of a fixed number of cylinders every year, making it affordable for
                            households to use LPG for their fuel needs.

                        </p>
                        <p style="text-align:justify">
                            There is no doubt that there are some distinct advantages that you can take advantage of if
                            you switch to LPG at home.
                        </p>
                        <div class="bottom ">
                            <a class="nav-link" href="{{ route('user.about') }}"> View More</a>
                        </div>
                    </div>
                </div>
                <div class="image col-lg-8 col-md-6 col-sm-12">
                    <div data-aos="zoom-out">
                        <img src="{{ asset('user/images/about.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section banner end-->
    <!--section benefits start-->
    <section class="benefits " id="tab-benefits">
        <div data-aos="fade-up">
            <h1 class="text-center">
                Our
                <span> Benefits</span>
            </h1>
        </div>
        <div class="container p-5 pb-0">
            <div class="row">
                <div data-aos="fade-up">
                    <div class="owl-carousel">
                        <div class="card p-4 mt-3">
                            <div class=" card-img-top ">
                                <img src="{{ asset('user/images/payment-method.png') }}" width="90%">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title ">Easy Payment Method</h5>
                            </div>
                        </div>
                        <div class="card p-4 mt-3">
                            <div class="card-img-top">
                                <img src="{{ asset('user/images/tracking.png') }}">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title ">Delivery tracking available</h5>
                            </div>
                        </div>
                        <div class="card p-4 mt-3">
                            <div class="card-img-top">
                                <img src="{{ asset('user/images/no-travelling.png') }}" width="90%">
                            </div>
                            <div class="card-body text-center ">
                                <h5 class="card-title ">No hassle of traveling to gas agency</h5>
                            </div>
                        </div>
                        <div class="card p-4 mt-3">
                            <div class="card-img-top">
                                <img src="{{ asset('user/images/time-check.png') }}">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title ">Refill can be booked anytime, anywhere</h5>
                            </div>
                        </div>
                        <div class="card p-4 mt-3">
                            <div class="card-img-top">
                                <img src="{{ asset('user/images/no-charges.png') }}">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title ">No additional charges for booking online</h5>
                            </div>
                        </div>
                        <div class="card p-4 mt-3">
                            <div class="card-img-top">
                                <img src="{{ asset('user/images/safe.png') }}">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title ">Safe and convenient method of booking and refill</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section benefits end-->
    <!--choose section start-->
    <section class="choose" id="tab-choose">

        <div class="tittle">
            <div data-aos="fade-up">
                <h1 class="text-center">
                    Why
                    <span> Choose Us</span>
                </h1>
            </div>
        </div>
        <div class="container choices ">
            <div class="left-top ">
                <div class="left-top-circle">
                    <img src="{{ asset('user/images/payment-method.png') }}" height="90px">
                </div>
                <div class="left-top-text">
                    <h4 class="text-center">Pre Booking</h4>
                    <p>We Provide pre booking for various types of gas cylinder.</p>
                </div>
            </div>
            <div class="right-top">
                <div class="right-top-circle">
                    <img src="{{ asset('user/images/delivery.png') }}" height="90px">
                </div>
                <div class="right-top-text">
                    <h4 class="text-center">Home Delivery</h4>
                    <p> Get faster home delivery service with quick order processing & tracking.</p>
                </div>
            </div>
            <div class="right-bottom">
                <div class="right-bottom-circle">
                    <img src="{{ asset('user/images/discount.png') }}" height="90px">
                </div>
                <div class="right-bottom-text">
                    <h4 class="text-center">Discount</h4>
                    <p>Discounts are provided. During the festive season through which you can save your money.</p>
                </div>
            </div>
            <div class="left-bottom">
                <div class="left-bottom-circle">
                    <img src="{{ asset('user/images/payment.png') }}" height="90px">
                </div>
                <div class="left-bottom-text">
                    <h4 class="text-center">Payment Method</h4>
                    <p> payment totally depends upon you whether you want to pay by the credit cards or cash on
                        delivery.</p>
                </div>
            </div>
        </div>

    </section>
    <!--choose section end-->
    <!-- product section start-->
    <section class="products">

        <div class="container-fluid container-custom margin_30">
            <div data-aos="fade-up">
                <h1 class="text-center">
                    Our
                    <span>Products</span>
                </h1>
            </div>
            <div class="container">
                <div class="row mt-3">
                    <div data-aos="fade-up">
                        <div class="owl-carousel">

                            @foreach (\App\Models\Product::all() as $item)
                                <div class="card mb-4">

                                    <img src="{{ asset('storageofproduct/images/products/' . $item->image) }}"
                                        alt="{{ $item->image }}" height="200px" class="card-img-top">
                                    <div class="card-body text-center bg-light">
                                        <h3 class="card-title ">{{ $item->name }}</h3>
                                        <h6>RS:{{ $item->price }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="bottom mb-4 mt-5">
                            <a class="nav-link" href="{{ route('login') }}"> View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product section end-->
    <!--Technician section starts-->
    <section class="technician">
        <div class="technician-bg">
            <div class="container-fluid">
                <div data-aos="fade-up">
                    <h1 class="text-center p-3">Technicians</h1>
                </div>
                <div data-aos="fade-up">
                    <div class="row text-center  p-2 d-flex">
                        @foreach (\App\Models\User::role('Technician')->get() as $technician)
                            <div class=" col-lg-3 col-md-4 mb-md-0 d-flex ">

                                <div class="card technician-card">
                                    <div class="card-up">
                                        <div class="avatar mx-auto ">
                                            <img src="{{ asset('user/images/spongebob.png') }}"
                                                class="rounded-circle img-fluid">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>{{ $technician->name }}</h4>
                                        <p>{{ $technician->address }}</p>
                                        <ul class="list-unstyled d-flex justify-content-center mb-0">
                                            {{-- change the star with its interger value using conditions --}}
                                            <li>
                                                <i class="fas fa-star fa-sm text-warning"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-warning"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-warning"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-warning"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>{{ $technician->phone }}</p>
                                        @foreach ($technician->feedbacks() as $feedback)
                                            <p class="dark-grey-text mt-4">
                                                <i class="fas fa-quote-left pe-2"></i>
                                                {{ $feedback->message }}
                                            </p>
                                        @endforeach
                                        {{-- feedback section --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Technician section ends-->
    <!--section footer start-->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 pt-5 ">
                    <div class="info">
                        <img src="{{ asset('user/images/Logo.png') }}" width="80%" height="100px">
                        <div class="text">
                            <p>GasLink is founded in 2022. The main objective is to manage the details of Connections,
                                Customers, Payments, Gas, Delivery.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12 pt-5">
                    <div class="useful">
                        <h5 class="px-4">About Us</h5>
                        <ul class="px-4">
                            <li>
                                <a href="{{ route('user.about') }}">Company Profile</a>
                            </li>

                            <li>
                                <a href="{{ route('user.contact') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy & Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12 pt-5">
                    <div class="useful">
                        <h5 class="px-4">Quick links</h5>
                        <ul class="px-4">
                            <li>
                                <a href="#tab-about">About </a>
                            </li>

                            <li>
                                <a href="#tab-benefits">Benefits</a>
                            </li>
                            <li>
                                <a href="#tab-choose">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('user.contact') }}">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-5">
                    <div class="opening">
                        <h5 class="px-3">Contact Us</h5>
                        <ul class="px-3">
                            <li>
                                <i class="fa-solid fa-envelope " style="color: rgb(216 117 70)"></i>
                                gaslink@gmail.com
                            </li>
                            <li>
                                <i class="fa-solid fa-phone " style="color:rgb(216 117 70)"></i>
                                021456789,021567893
                            </li>
                            <li>
                                <i class="fa-solid fa-earth-americas " style="color:rgb(216 117 70)"></i>
                                www.gaslink.com.np
                            </li>
                            <li>
                                <i class="fa-solid fa-map " style="color:rgb(216 117 70)"></i>
                                Mid Baneshwor,Kathmandu,Nepal
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- footer section end-->
    <section class="copyright">
        <div class="text  p-3">
            <span> © GasLink. All Rights Reserved </span> | Design by: <a
                href="https://www.facebook.com/essneha.sapkota/" target="_blank">Sneha Sapkota</a>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-teletype-plugin/0.1.6/jquery.teletype.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="{{ asset('user/js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    @stack('js')
</body>
</html>
