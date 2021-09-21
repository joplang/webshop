@extends('layouts.app')

@section('content')
    @if (Auth::check())
         <a href="/customers/{{ Auth::user()->id}}">Bezoek uw profiel</a>
    @else
        <a  href="{{ route('login') }}">{{ __('Login') }}</a>
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

@endif
@endsection