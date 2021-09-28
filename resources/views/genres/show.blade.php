@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="row justify-content-center">
                <div class="card m-4" style="width: 40rem;">
                    <img src="/imgs/genres/{{$genre->id}}.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $genre->name }}</h3>
                      <p class="card-text">{{ $genre->description}}.</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center"><b>Al onze producten in de categorie {{ $genre->name }}:</b></div>
                <div class="card-text text-center">Klik op het product voor meer informatie!</div>
            </div>
                @foreach ($genre->products as $product)
                <div class="card border-dark m-4 p-2">
                        <div class="card-title text-center"> 
                            <a href="/artists/{{$product->id}}"><b>{{ $product->album_title }}</b></a>    €{{ $product->price }}
                        </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
  

@endsection