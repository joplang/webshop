@extends('layouts.app')

@section('content')

<div class="container-fluid ">
    <div class="row">
        @foreach ($labels as $label)
        <div class="col-6">
            <div class="card m-3" style="width: 30rem;">
                <a href="/labels/{{ $label->id }}">
                    <b>
                        <div class="card-header">{{ $label->name }}</div>
                    </b>
                </a>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-text text-truncate"> {{ $label->description }}</div>
                        </div>
                        <div class="col-6"><img src="/imgs/labels/{{$label->id}}.jpg" class="img-fluid rounded-end" alt="..."></div>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
    </div>
</div>
@endsection