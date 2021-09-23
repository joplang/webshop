@extends('layouts.app')

@section('content')
<span class="d-block p-2 bg-dark text-white text-center">  <h2> {{ $artist->name }}</h2></span>


<div class="container-sm">
    <div class="row">
            @foreach ($products as $product)
                <div class="col-6">
                        <div class="card m-2">
                                <a href="/products/{{ $product->id }}">
                                        <div class="card-header">{{ $product->album_title}}</div>
                                </a>
                                <div class="card-body"> 
                                         <div class="card-title">{{ $product->year }} {{ $label->name }}</div>
                                         <div class="card-text">{{ $product->description }}</div>
                                         <div class="card-text">{{ $product->track_list }}</div>
                                </div>
                        <div class="card-footer"> € {{ $product->price }} </div>
                        </div>
                </div>
            @endforeach
    </div>
</div>
@endsection