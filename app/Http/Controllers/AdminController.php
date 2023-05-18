<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function showorder()
    {
        $orders=Order::all();
        return view('admin.showorder', compact('orders'));
    }
    public function updatedeliverystatus($id)
    {
        $order=Order::find($id);
        $order->delivery_status='delivered';
        $order->save();

        return redirect()->back();
    }
}
