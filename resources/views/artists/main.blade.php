@extends('layouts.app')

@section('content')
 <div class="container-fluid">
     @foreach ($artists as $artist)
         <div class="card">
             <a href="/artists/{{ $artist->id }}">
                 <div class="card-header"> {{ $artist->name }} </div>
             </a>
         </div>
     @endforeach
 </div>

@endsection
