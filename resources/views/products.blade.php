@extends('layouts.app')
@section('content')
<section>
    <div class="search"
        style="position: absolute;
        z-index: 9999;
        margin-left: 640px;
        margin-top: -120px;">
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
    <div class="search" style="margin-top: 150px;">
        <form method="GET" action="{{ route('product_search') }}"
            style="display: flex; margin-left: 600px;margin-top: 20px;">
            <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" >
            <div class="form-group" style="width: 410px;">
                <select id="form3Example3c" class="form-control" name="category">
                    <option> Select Category </option>
                    @foreach (\App\Models\ProductCategory::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->title }} </option>
                    @endforeach
                </select>
            </div>            
            <input type="submit" value="search" class="btn" style="background: #3f6a9b;color: white;">
        </form>
    </div>
    <div class="container">
        <div data-aos="fade-up">
            <div class="row mt-3">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-5 mt-4">
                            <img src="{{ asset('storageofproduct/images/products/' . $item->image) }}" alt="{{ $item->image }}"
                                height="200px" class="card-img-top">
                            <div class="card-body text-center bg-light">
                                <h3 class="card-title " style="color: #1f4975;">{{ $item->name }}</h3>
                                <h6 style="color:  #f16038;">RS:{{ $item->price }}</h6>
                                <form action="{{ url('addcart', $item->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="number" value="1" min="1" class="form-control"
                                                style="width:100px; background: #1f4975; color: white; margin-left: 30px;"
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
@endsection
