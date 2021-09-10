@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <img src="https://images.unsplash.com/photo-1483821838526-8d9756a6e1ed?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1776&q=80">
            </div>
        </div>
    </div>
</div>
<div class="container"> 
@foreach ( $artists as $artist)
  <div class="card">
  <?= $artist->name ?>
<a href="/artists/<?= $artist->id ?>"> Klik! </a>
  </div>
    
@endforeach
</div>
@endsection
