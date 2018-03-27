<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Category;

use App\Cart;
use App\Order;
use App\Http\Requests;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;


class CartController extends Controller
{
    public function increase(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect('/cart');
    }

    public function reduce($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

         if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect('/cart');
    }

    public function removeItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect('/cart');
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return redirect('/cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        return view('/pages/checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect('/cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

            $order = new Order();
            $order->cart = serialize($cart);
            $order->name = $request->input('name');

            Auth::user()->orders()->save($order);

        Session::forget('cart');
        return redirect('/menu');
    }
}



    // public function postCheckout(Request $request)
    // {
    //     if (!Session::has('cart')) {
    //         return redirect('/cart');
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);


    //     Stripe::setApiKey("sk_test_TgjRLVgMNUEbwB0oFkLg4yFU");

    //     try {
    //         Charge::create(array(

    //           "amount" => $cart->totalPrice * 100,
    //           "currency" => "eur",
    //           "source" => $request->input('stripeToken'),
    //           "description" => "Charge for test"
    //         ));

    //         $order = new Oder();
    //         $order->cart = serialize($cart);
    //         $order->name = $request->input('name');
    //         $order->payment_id = $charge->id;

    //         Auth::user()->orders()->save($order);

    //     } catch (\Exception $e) {
    //         return redirect('/checkout')->with('error', $e->getMessage());
    //     }

    //     Session::forget('cart');
    //     return redirect('/menu')->with('success', 'Successefully ordered dihes!');
    // }
