<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $data = User::select('id','created_at')->get()->groupBy(function($data){
        //     return Carbon::parse($data->create_at)->format('M');
        // });
        // return view('admin.index',['data' => $data]);
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
