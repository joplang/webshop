@extends('layouts.app')

@section('content')
<span class="d-block p-2 bg-dark text-white text-center">  <h2> {{ $user->first_name }}</h2></span>


<div class="container-fluid ">
    <div class="row">
        <div class="col-6">
            <div class="card m-3" style="width: 30rem;">
                <div class="card-header"><b>{{ $user->first_name }} {{ $user->last_name }}</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-text">{{$user->email}}</div>
                            <div class="card-text">Adres</div>
                            <div class="card-text">Telefoonnummer</div>
                        </div>
                        <div class="col-6">
                            <img src="/imgs/users/1.jpg" class="img-fluid rounded-end" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-3" style="width: 30rem;">
                <div class="card-header"><b>Reviews</b></div>
                <div class="card-body">
                    @foreach ($user->reviews as $review)
                            <a href="/products/{{ $review->product_id }}">
                                <div class="card-title">{{ $review->score }}/5☆</div>
                            </a>
                            <div class="card-text"> {{ $review->description }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card m-3" style="width: 30rem;">
                <div class="card-header">Bestellingen</div>
                <div class="card-body">
                   <div class="card-text">Work in Progress</div> 
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-3" style="width: 30rem;">
                <div class="card-header">Wishlist</div>
                <div class="card-body">
                   <div class="card-text">Work in Progress</div> 
                </div>
            </div>

        </div>
    </div>
@endsection