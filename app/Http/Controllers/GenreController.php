<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Product;

class GenreController extends Controller
{

    public function index()
    {

        return view('genres/main', [
            'genres' => Genre::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('genres/show', [
            'genre'     => $genre,
        ]);
    }
}
