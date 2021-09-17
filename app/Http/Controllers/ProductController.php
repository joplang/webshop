<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Faker\Extension\Helper;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\Console\Helper\Helper as HelperHelper;
use Symfony\Component\HttpFoundation\UrlHelper;
use App\Models\Artist;
use App\Models\Review;

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


        return view('products/main', [
            'products' => $products,
        ]);
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
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {

        $id = request()->route('product');


        $product = Product::find($id)->first();


        $artist = Artist::get()->where('id', $product->artist_id)->first();

        $reviews = Review::get()->where('product_id', $id);


        return view('products/show', [
            'product' => $product,
            'artist'  => $artist,
            'reviews' => $reviews,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        //
    }
}
