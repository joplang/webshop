<?php

namespace App\Http\Controllers;

use App\Models\Artist;

class ArtistController extends Controller
{

    public function index()
    {
        return view('artists/main', [
            'artists' => Artist::all(),
        ]);
    }


    public function show(Artist $artist)
    {
        return view('artists/show', [
            'artist'    => $artist,
        ]);
    }
}
