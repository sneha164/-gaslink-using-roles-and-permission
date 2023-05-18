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
            <h2>Services</h2>
            <ul>
                <li class="mx-2"><a href="index.html">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>
    <!--section breadcrumb end-->
    <!--section services started-->
    <section class="services">
        <div class="container">
            <div class="row">
                <h1 class="text-center p-3">Our Services</h1>
                <div class="image col-lg-6 col-md-6 col-sm-12 mb-5">
                    <img src="{{ asset('user/images/why.jpg') }}" width="100%" height=605px;>
                </div>
                <div class="text col-lg-6 col-md-6 col-sm-12 mb-5">
                    <div class="item bg-light p-2">
                        <div class="left">
                            <img src="{{ asset('user/images/payment-method.png') }}" height="90px">
                        </div>
                        <div class="right">
                            <h4 class="text-center">Pre Booking</h4>
                            <p class="text-center">We Provide pre booking for various types of gas cylinder.</p>
                        </div>
                    </div>
                    <div class="item bg-light p-2 mt-5">
                        <div class="left">
                            <img src="{{ asset('user/images/delivery.png') }}" height="90px">
                        </div>
                        <div class="right bg-light">
                            <h4 class="text-center">Home Delivery</h4>
                            <p class="text-center"> Get faster home delivery service with quick order processing & tracking.
                            </p>
                        </div>
                    </div>
                    <div class="item bg-light p-2 mt-5">
                        <div class="left">
                            <img src="{{ asset('user/images/discount.png') }}" height="90px">
                        </div>
                        <div class="right">
                            <h4 class="text-center">Discount</h4>
                            <p class="text-center">Discounts are also provided. You can get discounts during the festive
                                season through which you can save your money.</p>
                        </div>
                    </div>
                    <div class="item bg-light p-2 mt-5">
                        <div class="left">
                            <img src="{{ asset('user/images/payment.png') }}" height="90px">
                        </div>
                        <div class="right">
                            <h4 class="text-center">Payment Method</h4>
                            <p class="text-center"> payment mode is totally depending upon you whether you want to pay by
                                the credit cards or to cash on delivery..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section services ended-->
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
@endsection
