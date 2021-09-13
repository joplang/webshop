<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $artists = Artist::all();

        return view('artists/main', [
            'artists' => $artists
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
     * @param  \App\Models\artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artists)
    {
        $id = request()->route('artist');

        $artist = Artist::get()->where('id', $id);

        // dd($artist);

        return view('artists/show', [
            'artist' => $artist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artists)
    {
        //
    }
}
