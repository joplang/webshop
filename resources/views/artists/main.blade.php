@extends('layouts.app')

@section('content')
 <div class="container-fluid">
     <div class="row">
         @foreach ($artists as $artist)
             <div class="col-6">
                 <div class="card m-2">
                     <a href="/artists/{{ $artist->id }}">
                         <div class="card-header"> {{ $artist->name }} </div>
                     </a>
                 </div>
             </div>
         @endforeach
     </div>
 </div>

@endsection
