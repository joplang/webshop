<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        if (!Session::exists('cart')) {
            Session::put('cart');
        } else {
            // Session::remove('cart');
        }

        return view('cart/home', [
            'products'  => $products,
            'cart'      => Session::get('cart'),

        ]);
    }

    public function addToCart(Request $request)
    {
        try {
            $session = Session::get('cart');
            $session[(int)$request->product_id] = (int)$request->quantity;

            Session::put('cart', $session);

            return response()->json([
                'success'       => true,
                'num_products'  => count($session),
                'prices'        => $this->totalCost(),
            ]);
        }
        catch(Exception $e) {
            return response()->json([
                'success'   => false,
                'message'   => $e->getMessage(),
            ]);
        }
    }

    public function totalCost()
    {
        $cart = Session::get('cart');

        $total = 0;
        $vat = 0;

        foreach ($cart as $productId => $quantity) {
            $product = Product::findOrFail($productId);

            $total += ($product->price * $quantity);
            $vat += $product->vat;
        }

        return [$total, $vat];

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Remove item from cart
     */
    public function removeFromCart (Request $request)
    {
        try {
            $session = Session::get('cart');

            if(array_key_exists($request->product_id, $session)) {
                unset($session[$request->product_id]);
            }

            Session::put('cart', $session);

            return response()->json([
                'success'       => true,
                'num_products'  => count($session),
                'prices'        => $this->totalCost(),
            ]);
        }
        catch(Exception $e) {
            return response()->json([
                'success'   => false,
                'message'   => $e->getMessage(),
            ]);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //retrieving and deleting an item
        // $value = $request->session()->pull('key', 'default');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Empty cart function?
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //winkelmandje leeg functie
    }
}