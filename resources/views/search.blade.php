@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <span class="d-block p-2 bg-dark text-white text-center">  <h2> Albums:</h2></span>
        <div class="row">
            @forelse  ($products as $product)
                            <div class="col-4">
                                <div class="card m-2 rounded-pill w-50 ">
                                    <a href="/products/{{ $product->id }}">
                                        <div class="card-header text-center"> <b>{{ $product->album_title }}</b> </div>
                                    </a>
                                    <div class="card-footer text-center">€  {{ $product->price }} </div>
                                </div>
                            </div>
             @empty
        </div>
         <span class="d-block p-2 bg-dark text-white text-center">  <h5> Geen albums gevonden</h5></span>
         @endforelse

        <span class="d-block p-2 bg-dark text-white text-center">  <h2> Artiesten:</h2></span>
        <div class="row">
            @forelse  ($artists as $artist)
                        <div class="col-6">
                            <div class="card m-2 rounded-pill w-50 ">
                                <a href="/artists/{{ $artist->id }}">
                                    <div class="card-header text-center"> <b>{{ $artist->name }}</b> </div>
                                </a>
                            </div>
                        </div>
            @empty
        </div>
        <span class="d-block p-2 bg-dark text-white text-center">  <h5> Geen Artiesten gevonden</h5></span>
        @endforelse

        <span class="d-block p-2 bg-dark text-white text-center">  <h2> Genres:</h2></span>
        <div class="row">
            @forelse  ($genres as $genre)
                      <div class="col-6">
                          <div class="card m-2 rounded-pill w-50 ">
                              <a href="/genres/{{ $genre->id }}">
                                  <div class="card-header text-center"> <b>{{ $genre->name }}</b> </div>
                              </a>
                          </div>
                      </div>
            @empty
        </div>
        <span class="d-block p-2 bg-dark text-white text-center">  <h5> Geen Genres gevonden</h5></span>
        @endforelse

        <span class="d-block p-2 bg-dark text-white text-center">  <h2> Platenlabels:</h2></span>
        <div class="row">
            @forelse  ($labels as $label)
                      <div class="col-6">
                          <div class="card m-2 rounded-pill w-50 ">
                              <a href="/labels/{{ $label->id }}">
                                  <div class="card-header text-center"> <b>{{ $label->name }}</b> </div>
                              </a>
                          </div>
                      </div>
            @empty
        </div>
        <span class="d-block p-2 bg-dark text-white text-center">  <h5> Geen Platenlabels gevonden</h5></span>
        @endforelse

    </div>

@endsection