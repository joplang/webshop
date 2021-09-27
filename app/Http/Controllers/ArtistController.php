<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Label;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the artists
        $artists = Artist::all();

        //load the view and pass the artists
        return view('artists/main', [
            'artists' => $artists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //load the create form (app/views/artists/create.blade.php)
        return view('artists/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //blalalalla
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('artists/show', [
            'artist'    => $artist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get the artists
        $artists = Artist::find($id);

        //show the edit form and pass the artists
        return View::make('artists.edit')
            ->with('artists', $artists);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $rules = array(
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        );

        //process the login
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $artists = Artist::find($id);
        $artists->delete();

        // redirect
        return Redirect::to('artists');
    }
}
