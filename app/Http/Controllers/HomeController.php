<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Artist;
use App\Models\Label;
use App\Models\Genre;

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
        $products   = Product::all();
        $artists    = Artist::all();
        $labels     = Label::all();
        $genres     = Genre::all();

        $highlights  = $products->slice(1, 5);


        return view('welcome', [
            'products'  => $products,
            'artists'   => $artists,
            'labels'    => $labels,
            'genres'    => $genres,
            'highlights' => $highlights,
        ]);
    }
}
