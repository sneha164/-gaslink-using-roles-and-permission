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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a href="#" class="navbar-brand">
                        <div data-aos="fade-right">
                            <img src="{{ asset('user/images/Logo.jpg') }}" alt="logo">
                        </div>
                    </a>
                    <div class="home">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3">
                                <a href="{{ route('welcome') }}"
                                    class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}">
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
                            <a class="nav-link" href="{{ route('register') }}" target="_blank"><span
                                    class="fas fa-user"></span> Sign Up</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}" target="_blank"><span
                                    class="fas fa-sign-in-alt"></span> Login</a>
                        </li>
                    </div>
                </div>
        </nav>
    </section>
    <!--section navigation end-->
    <!--section breadcrumb start-->
    <section class="breadcrumbs">
        <div class="d-flex text  mt-5 p-5 justify-content-between align-items-center">
            <h2>Benefits</h2>
            <ul>
                <li class="mx-2"><a href="index.html">Home</a></li>
                <li>Benefits</li>
            </ul>
        </div>
    </section>
    <!--section breadcrumb end-->
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
                                <a href="">Company Profile</a>
                            </li>
                            <li>
                                <a href="">Contact Us</a>
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
                                <a href="">Contact</a>
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
                                gasbooking@gmail.com
                            </li>
                            <li>
                                <i class="fa-solid fa-phone " style="color:rgb(216 117 70)"></i>
                                021456789,021567893
                            </li>
                            <li>
                                <i class="fa-solid fa-earth-americas " style="color:rgb(216 117 70)"></i>
                                www.gasbookingsystem.com.np
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
            <span> © GasLink. All Rights Reserved </span> | Design by: <a href="https://www.facebook.com/essneha.sapkota/"
                target="_blank">Sneha Sapkota</a>
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
