@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row ">
        @foreach ($genres as $genre)
            <div class="col-6 ">
                <div class="card m-3" style="width: 30rem;">
                    <a href="/genres/{{ $genre->id }}">
                        <b>
                            <div class="card-header"> {{ $genre->name }}</div>
                        </b>
                    </a>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-6">{{ $genre->description }} </div>
                            <div class="col-6"><img src="/imgs/genres/{{$genre->id}}.jpg" class="img-fluid rounded-end" alt="..."></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection