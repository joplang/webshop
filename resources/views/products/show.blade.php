@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row justify-content-center p-5">
            <div class="card">
                <div class="card-header">
                        <h4>{{ $product->album_title }}</h4>
                        <div class="card-title"> 
                        <a href="/artists/{{ $artist->id }}">{{ $artist->name }}  </a> </div> 
                       
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-text">
                                <p> {{ $product->track_list }} </p>
                                <p> {{ $product->description }} </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="https://picsum.photos/200/250
                            " class="img-fluid rounded-end" alt="...">
                        </div>
                    </div>

                </div>
                    <div class="card-footer"> 
                        <div class="row">
                            <div class="col-6">€{{ $product->price }}</div>
                            <div class="col-6">
                                <button class="btn btn-dark" type="button">Bestel!</button>
                                <a class="btn btn-dark" href="/cart" role="button">Naar Checkout!</a>
                            </div>
                        </div>
                    </div>
            </div>
    </div>

</div>

@endsection