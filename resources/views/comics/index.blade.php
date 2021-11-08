@extends('layouts.main')

@section('title', "Comics") 

@section('contenuto')
<div id="main-block">
    <div id="main-wrapper" class="container">

        @foreach ($comicitem as $comic)
            
        @endforeach 
    </div> 
</div>
@endsection

 {{-- <div class="comic-item">
                <a href='{{route("comics.show" , ["id" => $loop->index])}}'>
                {{-- <a href="{{url("/comics/$loop->index")}}">   --}}
                    {{-- <img src="{{$comic["thumb"]}}" alt="">
                    <h4>{{$comic["title"]}}</h4>
                </a>
            </div>  --}} --}}