<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Reservation;
use App\Cart;
use App\Category;
use App\User;
use App\Users;
Use Auth;
use Session;

class PagesController extends Controller
{
    public function getIndex()
    {
    	return view('pages.index');
    }

    public function getMenu()
    {
        $categories = Category::with('products')->get();
        $products = Product::get();
        return view('pages.menu',['products' => $products, 'categories' => $categories]);
    }

    public function getReservation()
    {
    	return view('pages.reservation');
    }

    public function getContact()
    {
    	return view('pages.contact');
    }

    public function getConfirm()
    {
        return view('pages.confirm');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
    	return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}
