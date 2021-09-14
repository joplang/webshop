@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @foreach ($genres as $genre)
        <div class="card">
            <div class="card-header"> {{ $genre->name }}</div>
            <div class="card-body"> {{ $genre->description }} </div>
        </div>
    @endforeach
</div>


@endsection