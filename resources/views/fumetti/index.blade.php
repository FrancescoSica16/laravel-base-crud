@extends('layout.main')

@section('title', "Comics") 

@section('contenuto')

 <button><a href="{{route('fumetti.create')}}"> Nuovo Fumetto</a></button>
   

<div id="main-block">
    <div id="main-wrapper" class="container">

        @foreach ($fumetti as $fumetto)
        
        <div class="comic-item">
            <a href='{{ route ("fumetti.show" , ["fumetti" => $fumetto->id] ) }}'>
                
                <img src="{{$fumetto["url"]}}" alt="">
                <h4>{{$fumetto["title"]}}</h4>   
            </a>
        </div> 
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
            </div>  --}}