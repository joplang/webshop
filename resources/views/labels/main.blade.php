@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @foreach ($labels as $label)
    <div class="card">
        <a href="/labels/{{ $label->id }}">
            <div class="card-header">{{ $label->name }}</div>
        </a>
        <div class="card-body"> {{ $label->description }}</div>
    </div>
        
    @endforeach
</div>
@endsection