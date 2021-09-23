@extends('layouts.app')

@section('content')
 <div class="container-sm">
     <div class="row ">
         @foreach ($artists as $artist)
             <div class="col-6  ">
                 <div class="card m-2 rounded-pill w-50 ">
                     <a href="/artists/{{ $artist->id }}">
                         <div class="card-header text-center"> <b>{{ $artist->name }}</b> </div>
                     </a>
                 </div>
             </div>
         @endforeach
     </div>
 </div>

@endsection
