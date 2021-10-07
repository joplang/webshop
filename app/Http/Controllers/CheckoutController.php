<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;

class CheckoutController extends Controller
{

    protected $CartController;

    public function __construct(CartController $CartController)
    {
        $this->CartController = $CartController;
    }


    public function show()
    {
        return view('checkout.show', [
            'user'          => Auth::user(),
            'cart'          => Session::get('cart'),
            'total_cost'    => $this->CartController->totalCost()
        ]);
    }
}
