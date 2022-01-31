@extends('layouts.main-layouts')

@section('content')
    
    <h1>LISTA:</h1>

    @foreach ($comics as $comic)
        
        <li>
           <a href="{{ route('show', $comic -> id) }}">
               {{ $comic -> title }}
            </a> 
            - {{ $comic -> author }}
        </li>

    @endforeach

@endsection