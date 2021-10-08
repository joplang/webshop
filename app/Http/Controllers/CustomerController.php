<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('customers/show', [
            'user'      => Auth::user(),
        ]);
    }
}
