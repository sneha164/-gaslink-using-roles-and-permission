@extends('layouts.app')

@section('content')
    @role('Admin')
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
                                                <div class="value">89</div>
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
                                                <div class="value">5,990</div>
                                                <div class="stat">
                                                    <b>4</b>
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
                                                <div class="value">3</div>
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
        <!--section background starts-->
        <section class="background" style="margin-top: 0px">
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
        <!-- product section start-->
        <section class="products ">
            <div class="container-fluid container-custom margin_30">
                <h1 class="text-center">
                    Our
                    <span>Products</span>
                </h1>
                @if (session()->has('message'))
                    <div class="alert alert-success">

                        {{ session()->get('message') }}
                    </div>
                @endif
              
                    <div class="row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                            <div class="card mb-4 mt-5">
                                @foreach ($products as $item)
                                    <img src="{{ asset('storage/images/products/' . $item->image) }}" alt="{{ $item->image }}"
                                        height="200px" class="card-img-top">
                                    <div class="card-body text-center bg-light">
                                        <h3 class="card-title ">{{ $item->name }}</h3>
                                        <h6>RS:{{ $item->price }}</h6>
                                        <form action="{{ url('addcart', $item->id) }}" method="POST">
                                            @csrf
                                            <input type="number" value="1" min="1" class="form-control"
                                                style="width:100px" name="quantity">
                                            <input class="btn btn-primary" type="submit" value="Add Cart">
                                        </form>
                                    </div>
                                    @endforeach
                            </div>
                            
                        </div>
                        
                    </div>
            
            </div>
        </section>
        <!--Specialities section end-->
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
                <span> © GasLink. All Rights Reserved </span> | Design by: <a href="https://www.facebook.com/essneha.sapkota/"
                    target="_blank">Sneha Sapkota</a>
            </div>
        </section>

        {{-- <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif 


</div> --}}
    @endrole

@endsection
