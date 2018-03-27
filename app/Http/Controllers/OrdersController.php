<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Cart;
Use Auth;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function getOrders()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('/pages/orders', ['orders' => $orders]);
    }


    public function admOrders()
    {
        $orders = Order::all();
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('/admin/orders/orders', ['orders' => $orders]);
    }
}
