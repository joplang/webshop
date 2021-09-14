@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @foreach ($labels as $label)
    <div class="card">
        <div class="card-header">{{ $label->name }}</div>
        <div class="card-body"> {{ $label->description }}</div>
    </div>
        
    @endforeach
</div>
@endsection