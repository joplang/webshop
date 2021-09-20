<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Musicshop</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
@extends('layouts.app')
@section('content')
<span class="d-block bg-dark text-white text-center">  
    <h2>Het is Power Metal-week!</h2>
    <p>De hele week 50.50% korting op alle <a href="/labels/1">Power Metal</a></p>
</span>


<div class="container-sm" style="width: 50rem;">
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
                <p>{{$highlight->track_list}}.</p>
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
<div class="container-sm p-2">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header">Onze genres!</div>
        <ul class="list-group list-group-flush">
          @foreach ($genres as $genre)
            <li class="list-group-item"><a href="/labels/{{$genre->id}}">{{$genre->name}}</a></li>
           @endforeach
        </div>
      </div>
    <div class="col-6">
      <div class="card">
        <div class="card-header">Platenlabels!</div>
        <ul class="list-group list-group-flush">
          @foreach ($labels as $label)
          <li class="list-group-item"><a href="/labels/{{$label->id}}">{{$label->name}}</a></li>
         @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
  </body>
</html>