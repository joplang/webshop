<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index()
    {
        return view('products/main', [
            'products' => Product::Paginate(15),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $cart = [];
        if (Session::exists('cart')) {
            $cart = !is_null(Session::get('cart')) ? Session::get('cart') : [];
        }

        return view('products/show', [
            'product' => $product,
            'quantity'  => array_key_exists($product->id, $cart) ? $cart[$product->id] : null,
        ]);
    }
}
