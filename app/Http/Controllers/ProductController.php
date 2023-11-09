<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();

        return view('product', ['products' => $data]);
    }
    function detail($id)
    {

        $data =  Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function cartList()
    {
        $userId = Session::has('user') ? Session::get('user')['id'] : null;

        if (!$userId) {
            // User is not logged in
            return view('no-item', ['message' => 'Please Login to view your cart or Register to Add items to cart.']);
        }

        $data =  DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();

        if ($data->isEmpty()) {
            // No items in the cart
            return view('no-item', ['message' => 'Your cart is empty.']);
        }

        return view('/cartlist', ['products' => $data]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $req->address;
            $order->payment_method = $req->payment;
            $order->save();
        }
        Cart::where('user_id', $userId)->delete();

        return view('order-place');
    }


    function myOrder()
    {
        $userId = Session::has('user') ? Session::get('user')['id'] : null;

        if ($userId) {
            $allCart = Cart::where('user_id', $userId)->get();

            if ($allCart->isEmpty()) {
                // No items in the cart
                return view('no_items');
            }

            foreach ($allCart as $cart) {
                $order = new Order;

                $order->product_id = $cart['product_id'];
                $order->user_id = $cart['user_id'];
                $order->address = $req->address;
                $order->status = "pending";
                $order->payment_method = $req->payment;
                $order->payment_status = "pending";

                $order->save();
            }

            Cart::where('user_id', $userId)->delete();

            return redirect('/');
        } else {
            // User is not logged in
            return redirect('/login')->with('status', 'Please log in to make a purchase.');
        }
    }
}
