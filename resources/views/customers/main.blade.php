@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <span class="d-block p-2 bg-dark text-white text-center">  <h2><a href="/customers/{{ Auth::user()->id}}">Bezoek uw profiel, {{ Auth::user()->first_name }}</a></h2></span>

    @else
      <span class="d-block p-2 bg-dark text-white text-center">  <h2> <a  href="{{ route('login') }}">{{ __('Login') }}</a></h2></span>

      <span class="d-block p-2 bg-dark text-white text-center">  <h2> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> </h2></span>


@endif
@endsection