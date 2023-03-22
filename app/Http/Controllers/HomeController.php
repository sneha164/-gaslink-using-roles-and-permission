<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
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
        $data = Product::paginate(3);
        $user = auth()->user();
        $count = Cart::where('phone', $user->phone)->count();


        return view('home', compact('data', 'count'), [
            'products' => Product::latest()->filter(request(
                ['name', 'category', 'price']
            ))
                ->simplePaginate(8)->withQueryString()


        ]);
    }


    public function addcart(Request $request, $id)

    {
        $user = auth()->user();
        $item = Product::find($id);
        $cart = new Cart;
        $cart->name = $user->name;
        $cart->phone = $user->phone;
        $cart->address = $user->address;
        $cart->product_title = $item->name;
        $cart->price = $item->price;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function showcart()
    {
        $user = auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();
        $count = Cart::where('phone', $user->phone)->count();
        return view('user.showcart', compact('count', 'cart'));
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
            $order->status='not delivered';
            $order->save();
        }
        DB::table('carts')->where('phone',$phone)->delete();
        return redirect()->back()->with('message','Product Ordered Successfully');
    }
}
