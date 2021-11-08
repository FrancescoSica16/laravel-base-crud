@extends('layout.main')

@section("contenuto")
    <a href="{{route('fumetti.index')}}">Back</a>
    
        <h3>{{$fumetto->title}}</h3>
        <div>
            <img src="{{$fumetto->url}}" alt="">
        </div>
        <div>{{$fumetto->description}}</div>
    
@endsection