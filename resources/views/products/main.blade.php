@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @foreach ($products as $product)
        <div class="card">
            <a href="/products/{{ $product->id }}">
                <div class="card-header"> {{ $product->album_title }}</div>
            </a>
            <div class="card-body"> {{ $product->price }} </div>

        </div>
    @endforeach



</div>

@endsection
