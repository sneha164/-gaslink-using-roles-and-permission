@extends('layouts.app')
@section('content')
    @if (Auth::user()->hasRole('Vendor'))
        <section>
            <main class="py-4">
                <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                            <main role="main" class=" main ">
                                <div class="card-list">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                                            <div class="card blue">
                                                <div class="title">Order</div>
                                                <i class="fa-solid fa-arrow-up"
                                                    style="font-size: 30px; margin-left: 180px;"></i>
                                                <div class="value">{{ $orders->count() }}</div>
                                                <div class="stat">
                                                    <b>13</b>
                                                    % increase
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                                            <div class="card green">
                                                <div class="title">Product</div>
                                                <i class="fa-solid fa-arrow-up"
                                                    style="font-size: 30px; margin-left: 180px;"></i>
                                                <div class="value">{{ $products->count() }}</div>
                                                <div class="stat">
                                                    <b>25</b>
                                                    % increase
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                                            <div class="card orange">
                                                <div class="title">Profit</div>
                                                <i class="fa-solid fa-arrow-down"
                                                    style="font-size: 30px; margin-left: 180px;"></i>
                                                <div class="value">$80,990</div>
                                                <div class="stat">
                                                    <b>13</b>
                                                    % decrease
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                                            <div class="card red">
                                                <div class="title">new customers</div>
                                                <i class="fa-solid fa-arrow-down"
                                                    style="font-size: 30px; margin-left: 180px;"></i>
                                                <div class="value">{{ $users->count() }}</div>
                                                <div class="stat">
                                                    <b>13</b>
                                                    % decrease
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </main>
        </section>
    @else
        @if (Auth::user()->hasRole('Admin'))
        @elseif(Auth::user()->hasRole('Technician'))
        @else
            <section>
                <div class="search"
                    style="position: absolute;
                    z-index: 9999;
                    margin-left: 640px;
                    margin-top: 30px;">
                    <ul class="navbar-nav">
                        <div class="row">

                            <div style="position: fixed;">
                                <div class="d-flex d-none mt-4 d-md-flex flex-row align-items-center">
                                    <li class="nav-item" style="position: absolute;margin-left:400px;">
                                        <a class="nav-link " href="{{ url('showcart') }}">
                                            <span class="shop-bag"><i class="fa-solid fa-cart-shopping"></i></span>
                                            [ {{ $count }} ]
                                        </a>
                                    </li>

                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </section>
            <!--section background starts-->
            <section class="background" style="margin-top: 0px" id="tab-background">
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
                        <div class="bottom mt-4">
                            <a class="nav-link" href="{{ route('products_list') }}"> Order Now</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--section background ends-->
            <!-- product section start-->
            <section class="products " id="tab-products">
                <div class="container-fluid container-custom margin_30">
                    <div data-aos="fade-up">
                        <h1 class="text-center">
                            Our
                            <span>Products</span>
                        </h1>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="container">
                        <div data-aos="fade-up">
                            <div class="row mt-3">
                                @foreach ($products as $item)
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card mb-5 mt-5">
                                            <img src="{{ asset('storageofproduct/images/products/' . $item->image) }}"
                                                alt="{{ $item->image }}" height="200px" class="card-img-top">
                                            <div class="card-body text-center bg-light">
                                                <h3 class="card-title ">{{ $item->name }}</h3>
                                                <h6 >Rs:{{ $item->price }}</h6>

                                                <form action="{{ url('addcart', $item->id) }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4" style="width:110px;">
                                                            <input type="number" value="1" min="1"
                                                                class="form-control"
                                                                style=" background: #1f4975; color: white; margin-left: 30px;"
                                                                name="quantity">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input class="btn" type="submit" value="Add Cart"
                                                                style="position: absolute;
                                                                                background: #1f4975;
                                                                                margin-left:10px;
                                                                                color: white;">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Specialities section end-->
            <!--Specialities section end-->
            <section class="technician" id="tab-technician" style="height: 700px;">
                <div class="technician-bg">
                    <div class="container-fluid">
                        <h1 class="text-center p-3">Technicians</h1>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row text-center p-2 d-flex ">
                                @foreach (App\Models\User::role('Technician')->get() as $user)
                                    <div class=" col-lg-3 col-md-4 mb-md-0 d-flex ">
                                        <div class="card technician-card" style="width: 100%;">
                                            <div class="card-up"></div>
                                            <div class="avatar mx-auto " style="margin-top: -50px;">
                                                <img src="{{ asset('user/images/spongebob.png') }}"
                                                    class="rounded-circle img-fluid">
                                            </div>
                                            <div class="card-body " style="margin-top: -10px">
                                                <h4>{{ $user->name }}</h4>
                                                <p>{{ $user->address }}</p>

                                                <hr>
                                                <p>{{ $user->phone }}</p>
                                                @foreach ($user->feedbacks() as $feedback)
                                                    <p class="dark-grey-text mt-4">
                                                        <i class="fas fa-quote-left pe-2"></i>
                                                        {{ $feedback->message }}
                                                    </p>
                                                @endforeach
                                                <div>
                                                    @if (!Auth::user()->hasRole('Technician'))
                                                        <form method="post" action="{{ route('feedback') }}">
                                                            @csrf
                                                            <div class="col-xs-12 col-sm-12 col-md-12"
                                                                style="width: 50%;
                                                                margin-left: 80px;">
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ Auth::id() }}">
                                                            </div>
                                                            <textarea name="message"></textarea>
                                                            <input type="submit" value="post">

                                                        </form>
                                                    @endif
                                                </div>
                                                <form action="{{ route('hire') }}" method="POST">
                                                    @csrf
                                                    <div class="col-xs-12 col-sm-12 col-md-12"
                                                        style="width: 50%;
                                                            margin-left: 80px;">
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::id() }}">
                                                        <div class="form-group">
                                                            <strong>Wanna Hire me?</strong>
                                                            <input type="date" name="begin_date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center submit">

                                                        <input type="submit" class="btn btn-primary" value="Hire">
                                                    </div>
                                                </form>
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your
                                                    input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section footer start-->
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 pt-5 ">
                            <div class="info">
                                <img src="{{ asset('user/images/Logo.png') }}" width="80%" height="100px">
                                <div class="text">
                                    <p>GasLink is founded in 2022. The main objective is to manage the details of
                                        Connections,
                                        Customers, Payments, Gas, Delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-md-6 col-sm-12 pt-5" style="text-align:center;">
                            <div class="useful">
                                <h5 class="px-4">Quick links</h5>
                                <ul class="px-4">
                                    <li>
                                        <a href="#tab-technician">Technician </a>
                                    </li>

                                    <li>
                                        <a href="#tab-products">Products</a>
                                    </li>
                                    <li>
                                        <a href="#tab-background">Order Now</a>
                                    </li>
                                    <li>
                                        <a href="#tab-navbar">Add to cart</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 pt-5">
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
                    <span> © GasLink. All Rights Reserved </span> | Design by: <a
                        href="https://www.facebook.com/essneha.sapkota/" target="_blank">Sneha Sapkota</a>
                </div>
            </section>
        @endif
    @endif
@endsection
