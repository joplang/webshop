@extends('layouts.app')

@section('content')
@include('partials.banner')
@include('partials.carousel')
<br>

<div class="container-sm p-2">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header"><b>Onze genres!</b></div>
        <ul class="list-group list-group-flush">
          @foreach ($genres as $genre)
            <li class="list-group-item"><a href="/genres/{{$genre->id}}">{{$genre->name}}</a></li>
           @endforeach
        </div>
      </div>
    <div class="col-6">
      <div class="card">
        <div class="card-header"><b>Platenlabels</b>!</div>
        <ul class="list-group list-group-flush">
          @foreach ($labels as $label)
          <li class="list-group-item"><a href="/labels/{{$label->id}}">{{$label->name}}</a></li>
         @endforeach
        </div>
      </div>
  </div>
</div>
@endsection
