@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mx-auto">
        @foreach ($products as $product)
            <div class="col-4">
                <div class="card m-4">
                    <a href="/products/{{ $product->id }}">  <b><div class="card-header"> {{ $product->album_title }}</div></b></a>
                    <div class="card-body">     {{ $product->description }} </div>
                    <div class="card-footer">€  {{ $product->price }} </div>
                </div>
            </div>
        @endforeach
        {{ $products->links() }}

    </div>
</div>
@endsection
