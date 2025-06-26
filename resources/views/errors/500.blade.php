@extends('layouts.app')

@section('content')
    <h1>500 - Interne serverfout</h1>
    <p>Er ging iets mis aan onze kant. Probeer het later opnieuw.</p>
    <a href="{{ url('/') }}">Terug naar home</a>
@endsection
