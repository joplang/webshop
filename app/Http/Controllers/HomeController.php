<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Artist;
use App\Models\Label;
use App\Models\Genre;
use Exception;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

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

        if (!Session::exists('cart')) {
            Session::put('cart', $products);
        } else {
            Session::remove('cart');
        }

        return view('home', [
            'products'  => $products,
            'cart'      => Session::get('cart'),
        ]);
    }

    public function ajax(Request $request)
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
    
    private function totalCost()
    {
        $cart = Session::get('cart');

        $total = 0;
        $vat = 0;

        foreach ($cart as $key => $product) {
            $p = Product::findOrFail($key);
            $total += $p->price;
            $vat += $p->vat;
        }

        return [$total, $vat];

    }
}
