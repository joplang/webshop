@extends('layouts.app')

@section('content')
@include('partials.banner')
<div class="container-fluid">
  <div class="row">
    <div class="container-sm d-none d-xl-block" style="width: 50%;">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://images.unsplash.com/photo-1542208998-f6dbbb27a72f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1100&q=80" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card">
                    <b>  <h4>Albums van de maand!</h4> </b>
                    <p>Dit zijn onze uitgelichte albums!</p>
                  </div>
                </div>
           </div>
          @foreach ($highlights as $highlight)
            <div class="carousel-item">
              <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card">
                    <a href="/products/{{$highlight->id}}"> <h4>{{$highlight->album_title}}</h4> </a>
                    <h6> €{{$highlight->price}}</h6>
                  </div>
              </div>
           </div>
          @endforeach
          </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
  </div>
</div>

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
