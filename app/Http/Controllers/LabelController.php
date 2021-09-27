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
     * @param  \App\Models\label  $label
     * @return \Illuminate\Http\Response
     */
    public function show(label $label)
    {

        return view('/labels/show', [
            'label'     => $label,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\label  $label
     * @return \Illuminate\Http\Response
     */
    public function edit(label $label)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\label  $label
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, label $label)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\label  $label
     * @return \Illuminate\Http\Response
     */
    public function destroy(label $label)
    {
        //
    }
}
