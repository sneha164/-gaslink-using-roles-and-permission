@extends('layouts.app')
@section('content')
    <div class="mt-5" style="padding:100px;">
        <div class="pull-left">
            <h2>Order</h2>
        </div>
        <table class="table table-bordered bg-white">
            <tr>
                <th> Customer Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Product Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Payment Status</th>
                <th>Delivery Status</th>
                <th>Action</th>
            </tr>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->name }} </td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->product_name }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>{{ $order->delivery_status }}</td>
                    <td><a class="btn btn-success"style="background:  #1f4975;" href="{{ route('updatedeliverystatus', $order->id) }} ">
                            Delivered
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
