<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function index()
     {

        $data = Product::all();
        return view('admin.chart', compact('data'));
     }
     
     public function getData()
     {
        $data = Order::all();
         return response()->json($data);
     }
    
}
