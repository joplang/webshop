@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="row justify-content-center">
                <div class="card m-4" style="width: 40rem;">
                    <img src="/imgs/labels/{{$label->id}}.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $label->name }}</h3>
                      <p class="card-text">{{ $label->description}}.</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center"><b>Al artiesten van {{ $label->name }}:</b></div>
                <div class="card-text text-center">Klik op de artiest voor meer informatie!</div>
            </div>
                @foreach ($label->artists as $artist)
                <div class="card border-dark m-4 p-2">
                        <div class="card-title text-center">
                            <a href="/artists/{{$artist->id}}">{{ $artist->name }}</a>
                        </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
  



@endsection