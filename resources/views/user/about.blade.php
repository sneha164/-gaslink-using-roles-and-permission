<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'GasLink') }}</title>
    
    <link rel="icon" type="image/icon" href="{{ asset('user/images/fire.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >
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
        <div class="d-flex text bg-light mt-5 p-5 justify-content-between align-items-center">
            <h2>About</h2>
            <ul>
                <li class="mx-2"><a href="index.html">Home</a></li>
                <li class="mx-2">About</li>
            </ul>
        </div>
    </section>
    <!--section breadcrumb end-->
    <!--section about starts-->
    <section class="about" id="tab-about">
        <div class="container p-5 pb-0 ">
            <div class="row">

                <div class="text col-lg-6 col-md-6 col-sm-12">
                    <h1 class="text-center">Gas <span> Link</span></h1>

                    <p style="text-align:justify">
                        <span>
                            LPG or Liquefied Petroleum Gas is the most widely used cooking gas. The government of Nepal also
                            subsidizes the cost of a fixed number of cylinders every year, making it affordable for
                            households to use LPG for their fuel needs.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span>There is no doubt that there are some distinct advantages that you can take advantage of if
                            you switch to LPG at home.</span>
                    </p>
                    <p style="text-align:justify">
                        <span>The advantages such that some states in the country have gone on a drive to ensure that every
                            household in the state has access to LPG and are arming themselves with grants from the state
                            and central government to help with this transition. Some states are identifying houses where
                            there is no LPG and offering them connections, stoves and the first cylinder for free. We even
                            keep hearing about how the government has announced various subsidies for specific income
                            groups, on each cylinder of LPG that they buy.</span>
                    </p>
                    <p style="text-align:justify">
                        <span>So now the question really becomes, What is so great about LPG? The answer is that not only is
                            the fuel cheaper and cleaner than things like kerosene and wood, it is also usable as fuel for
                            cooking and fuel for vehicles. It also comes with the advantage of easy storage and more
                            efficient combustion. However these are not the only advantages to using LPG.</span>
                    </p>
                </div>
                <div class="image col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('user/images/about.png') }}" width="100%" height="500px">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--section banner end-->
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
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
</body>
</html>
