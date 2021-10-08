<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;
use App\Models\Artist;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labels = Label::all();

        return view('labels/main', [
            'labels' => $labels,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\label  $label
     * @return \Illuminate\Http\Response
     */
    public function show(label $label)
    {

        return view('/labels/show', [
            'label'     => $label,
        ]);
    }
}
