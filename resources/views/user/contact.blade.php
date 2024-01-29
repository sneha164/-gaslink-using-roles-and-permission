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
            <h2>Contact Us</h2>
            <ul>
                <li class="mx-2"><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--section breadcrumb end-->
    <!-- Start Contact  -->
    <section class="contact">
        <div class="container">
            <div class="row ">
                <div class="image col-lg-6 col-md-6 col-sm-12 ">
                    <img src="{{ asset('user/images/contact.png') }}" width="100%" height="100%">
                </div>
                <div class=" form col-lg-6 col-md-6 col-sm-12 p-5 ">
                    <h1 class="text-center">Get in Touch</h1>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="email">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="label" for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="label" for="#">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group bottom text-center">
                                    <input type="submit" value="Send Message" class="btn ">
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
    <!--section text started-->
    <div class=" contact-text bg-light">
        <div class="icon  text-secondary  p-3  text-center">
            <span class="mb-4"><i class="fa-solid fa-location-dot mx-2" style="color: rgb(241 96 56);"></i></span>

            <h3 class="text-center">Address</h3>
            <p>Mid Baneshwor, Kathmandu, Nepal</p>
        </div>
        <!--section text ended-->
        <div class="icon  text-secondary  p-3 text-center">
            <span class="mb-4"><i class="fa-solid fa-envelope mx-2" style="color: rgb(241 96 56);"></i></span>
            <h3 class="text-center">General Support</h3>
            <p>gasbooking@gmail.com</p>
        </div>
        <div class="icon  text-secondary   p-3 text-center">
            <span class="mb-4"><i class="fa-solid fa-phone mx-2" style="color: rgb(241 96 56);"></i></span>
            <h3 class="text-center">Let's talk</h3>
            <p>021456789,021567893</p>
        </div>
    </div>
    </div>
    <!--section map started-->
    <section class="map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe
                    src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=softech foundation&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </section>
    <!--section map ended-->
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
