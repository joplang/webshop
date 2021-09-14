@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <h2> {{ $artist->name }}</h2>
</div>
<div class="container-fluid">
    @foreach ($products as $product)
        <div class="card">
                <a href="/products/{{ $product->id }}">
                        <div class="card-header">{{ $product->album_title}}  {{ $product->year }} {{ $label->name }}</div>
                </a>
                <div class="card-body">{{ $product->price }}</div>
                <div class="card-body">{{ $product->description }}</div>
                <div class="card-body">{{ $product->track_list }}</div>



        </div>
    @endforeach
</div>
@endsection