@extends('layouts.app')

@section('content')
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
                    <div class="search">
                        <ul class="navbar-nav">
                            <div class="col-md-8">
                                <div class="d-flex form-inputs">
                                    <input class="form-control"  type="text" placeholder="Search any product...">
                                    <span class="glass"> <i class="fa-solid fa-magnifying-glass" ></i> </span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                    <span class="shop-bag"><i class="fa-solid fa-cart-shopping"></i></span>
                                    
                                </div>
                            </div>

                        </ul>
                    </div>

                    <div class="logout">



                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <span class="fas fa-sign-in-alt"></span>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </div>
                </div>

        </nav>
    </section>
    <!--section navigation end-->
    <!--section background starts-->
    <section class="background">
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
            <div class="bottom mt-4">
                <a class="nav-link" href="#"> Book Now</a>
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
                    <h1 class="text-center">
                        About
                        <span> Us</span>
                    </h1>
                    <p style="text-align:justify">

                        LPG or Liquefied Petroleum Gas is the most widely used cooking gas. The government of Nepal also
                        subsidizes the cost of a fixed number of cylinders every year, making it affordable for households
                        to use LPG for their fuel needs.

                    </p>
                    <p style="text-align:justify">
                        There is no doubt that there are some distinct advantages that you can take advantage of if you
                        switch to LPG at home.
                    </p>
                    <div class="bottom ">
                        <a class="nav-link" href="about.html"> View More</a>
                    </div>
                </div>
                <div class="image col-lg-8 col-md-6 col-sm-12">
                    <div data-aos="zoom-out-left">
                        <img src="{{ asset('user/images/about.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section banner end-->
    <!--section benefits start-->
    <section class="benefits " id="tab-benefits">
        <h1 class="text-center">
            Our
            <span> Benefits</span>
        </h1>
        <div class="container p-5 pb-0">
            <div class="row">
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
            <h1 class="text-center">
                Why
                <span> Choose Us</span>
            </h1>
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
                    <p> payment totally depends upon you whether you want to pay by the credit cards or cash on delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--choose section end-->
    <!-- product section start-->
    <section class="products mb-5">
        <div class="container-fluid container-custom margin_30">
            <h1 class="text-center">
                Our
                <span>Products</span>
            </h1>
            <div class="container">
                <div class="row mt-3">
                    <div class="owl-carousel">
                        <div class="card">
                            <img src="{{ asset('user/images/lighter.jpg') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title ">Gas lighter</h3>
                                <h6>NRs:100-/</h6>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('user/images/ngas.png') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title ">Lpg Cylinder</h3>
                                <h6>NRS:1800-/</h6>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('user/images/pipe.jpg') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center ">
                                <h3 class="card-title ">Gas Pipe</h3>
                                <h6>NRP:350-/</h6>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('user/images/stand.jpg') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title ">Stove Stand</h3>
                                <h6>NRP:250-/</h6>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('user/images/regulator.jpg') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title  ">Regulator</h3>
                                <h6>NRP:500-/</h6>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('user/images/burner.png') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title  "> Gas Burner</h3>
                                <h6>NRP:300-/</h6>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('user/images/stove.jfif') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title ">Gas Stove</h3>
                                <h6>NRP:4200-/</h6>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('user/images/knob.jpg') }}" height="200px" class="card-img-top">
                            <div class="card-body text-center">
                                <h3 class="card-title  "> Gas Stove knob</h3>
                                <h6>NRP:205-/</h6>
                            </div>
                        </div>
                    </div>

                    <div class="bottom mt-4">
                        <a class="nav-link" href="product.html"> View More</a>
                    </div>
                </div>

            </div>
    </section>
    <!--Specialities section end-->
    <section class="technician">
        <div class="technician-bg">
            <div class="container-fluid">
                <h1 class="text-center p-3">Technicians</h1>
                <div class="row text-center  p-2 d-flex align-items-stretch">
                    <div class=" col-lg-3 col-md-4 mb-md-0 d-flex align-items-stretch">
                        <div class="card technician-card">
                            <div class="card-up"></div>
                            <div class="avatar mx-auto ">
                                <img src="{{ asset('user/images/spongebob.png') }}" class="rounded-circle img-fluid">
                            </div>
                            <div class="card-body">
                                <h4>Maria Smantha</h4>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
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
                                <p class="dark-grey-text mt-4">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Lorem ipsum dolor sit amet eos adipisci,
                                    consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 mb-md-0 d-flex align-items-stretch">
                        <div class="card technician-card">
                            <div class="card-up"></div>
                            <div class="avatar mx-auto ">
                                <img src="{{ asset('user/images/minion.png') }}" class="rounded-circle img-fluid">
                            </div>
                            <div class="card-body">
                                <h4>Lisa Cudrow</h4>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
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
                                <p class="dark-grey-text mt-4">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Neque cupiditate assumenda in maiores
                                    repudi mollitia architecto.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 mb-0 d-flex align-items-stretch">
                        <div class="card technician-card">
                            <div class="card-up"></div>
                            <div class="avatar mx-auto">
                                <img src="{{ asset('user/images/panda.png') }}" class="rounded-circle img-fluid">
                            </div>
                            <div class="card-body">
                                <h4>John Smith</h4>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
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
                                <p class="dark-grey-text mt-4">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Delectus impedit saepe officiis ab
                                    aliquam repellat rem unde ducimus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 mb-0 d-flex align-items-stretch">
                        <div class="card technician-card">
                            <div class="card-up"></div>
                            <div class="avatar mx-auto ">
                                <img src="{{ asset('user/images/tom.jfif') }}" class="rounded-circle img-fluid">
                            </div>
                            <div class="card-body">
                                <h4>John Smith</h4>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
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
                                        <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                </ul>
                                <hr>
                                <p class="dark-grey-text mt-4">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Delectus impedit saepe officiis ab
                                    aliquam repellat rem unde ducimus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            &copy; Copyright <strong><span>OnFire Online Gas Booking System</span></strong>
        </div>
    </section>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif


    </div>
@endsection
