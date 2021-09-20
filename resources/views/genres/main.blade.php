@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row ">
        @foreach ($genres as $genre)
            <div class="col-6 ">
                <div class="card m-2">
                    <a href="/genres/{{ $genre->id }}">
                        <b>
                            <div class="card-header"> {{ $genre->name }}</div>
                        </b>
                    </a>
                    <div class="card-body"> {{ $genre->description }} </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection