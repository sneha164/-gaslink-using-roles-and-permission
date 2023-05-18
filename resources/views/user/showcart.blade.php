@extends('layouts.app')
@section('content')
    <div class="mt-5" style="padding:100px;">
        <div data-aos="fade-up">
            <div class="pull-left">
                <h2>My Cart</h2>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">

                {{ session()->get('message') }}
            </div>
        @endif
        <div data-aos="fade-up">
            <table class="table table-bordered bg-white">
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th width="280px">Action</th>
                </tr>
                <form action="{{ url('order') }}" method="POST">
                    @csrf
                    <?php $totalprice = 0; ?>
                    @foreach ($cart as $carts)
                        <tr>
                            <td>
                                <input type="text" name="productname[]" value=" {{ $carts->product_title }}"
                                    hidden="">
                                {{ $carts->product_title }}
                            </td>
                            <td>
                                <input type="text" name="quantity[]" value=" {{ $carts->quantity }}" hidden="">
                                {{ $carts->quantity }}
                            </td>
                            <td>
                                <input type="text" name="price[]" value=" {{ $carts->price }}" hidden="">
                                {{ $carts->price }}
                            </td>
                            <td>
                                <a class="btn btn-danger" style="background: #f16038;"
                                    onclick="return confirm('Are you Sure?')"
                                    href="{{ url('delete', $carts->id) }}">Delete</a>
                            </td>
                        </tr>
                        <?php $totalprice = $totalprice + $carts->price; ?>
                    @endforeach
        </div>
        <div data-aos="fade-up">
            <div class="total-price" style="margin-top: 110px;
            position: absolute;">
                <h4><span>Total Price: </span> Rs {{ $totalprice }}</h4>
            </div>
            <div class="text-center"
                style="    position: absolute;
            margin-left: 480px;
            margin-top: 110px;">
                <h1 class="mb-4 text-center" style="font-size: 25px; color: #f16038"> Proceed to Order</h1>
                <input type="submit" value="Cash on delivery" name="Confirm Order" class="btn mx-2 mb-2"
                    style="background: #1f4975; color: white;
                margin-top: 8px;">
                <input id="payment-button" type="submit" class="btn" value="Pay with Khlati"
                    style="background: #1f4975; color: white;">
            </div>
        </div>
        </form>
        </table>
    </div>
@endsection
