@extends('layouts.main-layouts')

@section('content')
    
    <p>
        {{ $comic -> release_date }}
        <br>
        {{ $comic -> pages }}
    </p>

@endsection