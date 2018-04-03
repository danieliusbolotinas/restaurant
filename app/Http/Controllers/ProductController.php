<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Category;

use App\Cart;
use App\Http\Requests;
use Session;
use Stripe\Charge;
use Stripe\Stripe;

use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $products = Product::all();
    return view('/admin/products/products',['products' => $products]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $categories = Category::all();
    return view('/admin/products/new')->withCategories($categories);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $product = new Product();
    $product->name = $request->input('name');
    $product->category_id = $request->input('category_id');
    $product->description = $request->input('description');
    $product->nettprice = $request->input('nettprice');
    $product->imageurl = $request->input('imageurl');

    $product->save();

    $request->session()->flash('success', 'The product was successfully saved!');

    return redirect('/admin/products');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $product = Product::findOrFail($id);
    $categories = Category::all();

    return view('/admin/products/edit', compact('product', 'categories'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $product = Product::findOrFail($id);
    $product->update($request->all());


    return redirect('/admin/products');
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    Product::destroy($id);
    return redirect('/admin/products');
  }

  public function addProduct(Request $request, $id)
  {
    $product = Product::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);

    $request->session()->put('cart', $cart);
    return redirect('menu');
  }


  // public function increase(Request $request, $id)
  // {
  //     $product = Product::find($id);
  //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
  //     $cart = new Cart($oldCart);
  //     $cart->add($product, $product->id);

  //     $request->session()->put('cart', $cart);
  //     return redirect('/cart');
  // }

  // public function reduce($id)
  // {
  //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
  //     $cart = new Cart($oldCart);
  //     $cart->reduce($id);

  //      if (count($cart->items) > 0) {
  //         Session::put('cart', $cart);
  //     } else {
  //         Session::forget('cart');
  //     }

  //     return redirect('/cart');
  // }

  // public function removeItem($id)
  // {
  //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
  //     $cart = new Cart($oldCart);
  //     $cart->removeItem($id);

  //     if (count($cart->items) > 0) {
  //         Session::put('cart', $cart);
  //     } else {
  //         Session::forget('cart');
  //     }

  //     return redirect('/cart');
  // }

  // public function getCheckout()
  // {
  //     if (!Session::has('cart')) {
  //         return redirect('/cart');
  //     }
  //     $oldCart = Session::get('cart');
  //     $cart = new Cart($oldCart);
  //     $total = $cart->totalPrice;

  //     return view('/pages/checkout', ['total' => $total]);
  // }

  // public function postCheckout(Request $request)
  // {
  //     if (!Session::has('cart')) {
  //         return redirect('/cart');
  //     }
  //     $oldCart = Session::get('cart');
  //     $cart = new Cart($oldCart);

  //     Stripe::setApiKey('sk_test_fQF9DKuKNhudVqFAf7KOPT9L');
  //     try {
  //         Charge::create(array(
  //           "amount" => $cart->totalPrice,
  //           "currency" => "usd",
  //           "source" => $request->input('stripeToken'), // obtained with Stripe.js
  //           "description" => "Test charge for Parazit project"
  //         ));

  //     } catch (\Exception $e) {
  //         return redirect('/pages/checkout')->with('error', $e->getMessage());
  //     }

  //     Session::forget('cart');
  //     return redirect('menu')->with('success', 'Successefully ordered dihes!');
  // }

}
