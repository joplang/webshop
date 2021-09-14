@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @foreach ($products as $product)
        <div class="card-title"> {{ $product->album_title }}</div>
    @endforeach



</div>

@endsection
