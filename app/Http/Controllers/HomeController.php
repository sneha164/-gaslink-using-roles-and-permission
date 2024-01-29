<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Technician;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {       
        $user = auth()->user();
        $users = User::all();
        $count = Cart::where('phone', $user->phone)->count();
        $products = Product::all();
        $orders = Order::all();
        return view('home', compact('products','user','users','orders'), ['count' => $count]);
    }

    // public function pricePercent()
    // {
    //     $dateFrom = Carbon::now()->subDays(30); 
    //     $dateTo = Carbon::now();
    //     $monthly = Order::whereBetween('created_at', [$dateFrom, $dateTo])->sum('price');
        
    //     $previousDateFrom = Carbon::now()->subDays(60);
    //     $previousDateTo = Carbon::now()->subDays(31);
    //     $previousMonthly = Order::whereBetween('created_at', [$previousDateFrom,$previousDateTo])->sum('price');
        
    //     if($previousMonthly < $monthly){
    //         if($previousMonthly > 0){
    //             $percent_from = $monthly - $previousMonthly;
    //             $percent = $percent_from / $previousMonthly * 100; //increase percent
    //         }else{
    //             $percent = 100; //increase percent
    //         }
    //     }else{ 
    //         $percent_from = $previousMonthly -$monthly;
    //         $percent = $percent_from / $previousMonthly * 100; //decrease percent
    //     }

    //     return $percent;
    // }

    public function addcart(Request $request, $id)

    {
        $user = auth()->user();
        $item = Product::find($id);
        $cart = new Cart;
        $cart->name = $user->name;
        $cart->phone = $user->phone;

        $cart->address = $user->address;
        $cart->product_title = $item->name;
        $cart->price = $item->price * $request->quantity;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function showcart()
    {
        $user = auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();
        $count = Cart::where('phone', $user->phone)->count();
        return view('user.showcart', ['count' => $count], ['cart' => $cart]);
    }
    public function deletecart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Remove Successfully');
    }
    public function confirmorder(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach ($request->productname as $key => $productname) {
            $order = new Order;
            $order->product_name = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];
            $order->name = $name;
            $order->phone = $phone;
            $order->address = $address;
            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'not delivered';
            $order->save();
        }
        DB::table('carts')->where('phone', $phone)->delete();
        return redirect()->back()->with('message', 'Product Ordered Successfully');
    }
    

    public function products()
    {
        $products = Product::all();
        $user = auth()->user();
        $count = Cart::where('phone', $user->phone)->count();
        return view('products', ['products'=> $products], ['count'=> $count]);
    }

    public function product_search(Request $request)
    {

        $search_text = $request->search;
        $user = auth()->user();
        $count = Cart::where('phone', $user->phone)->count();
        $query = Product::query();

        
        if ($request->has('search')) {
            $query->where('name', 'like', '%'.$request->input('search').'%');    
        }

        if ($request->has('category')) {
            $query->where('category_id', $request->input('category'));
        }
        $products = $query->get();
        return view('products', compact('products','count'));


    }

    public function hire(Request $request)
    {
        $user = $request->input('user_id');

        $hire = new Technician();
        $hire->user_id = $user;
        $hire->begin_date = $request->input('begin_date');
        $hire->save();

        return redirect()->route('home')->with('success','Technician Hire Successfully.');

    }

    
}
