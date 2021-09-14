@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="card">
    <div class="card-header"><h4>{{ $product->album_title }}</h4>{{ $product->price }}</div>
    <div class="card-body">
        <p> {{ $product->track_list }} </p>
        <p> {{ $product->description }} </p>
    </div>
    <a href="/artists/{{ $artist->id }}">
        <div class="card-footer"> {{ $artist->name }}  </div>
    </a>
</div>

</div>

@endsection