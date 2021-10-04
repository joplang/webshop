<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Artist;
use App\Models\Label;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome', [
            'products'  =>  Product::all(),
            'artists'   =>  Artist::all(),
            'labels'    =>  Label::all(),
            'genres'    =>  Genre::all(),
            'highlights' => Product::all()->slice(1, 5),
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $products = Product::query()
            ->where('album_title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('price', 'LIKE', "%{$search}%")
            ->orWhere('year', 'LIKE', "%{$search}%")
            ->get();

        $artists = Artist::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();

        $genres = Genre::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();

        $labels = Label::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();


        return view('search', compact('products', 'artists', 'genres', 'labels'));
    }
}
