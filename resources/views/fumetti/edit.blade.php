@extends('layout.main')


@section("contenuto")


    <a href="{{route("fumetti.index")}}">Torna alla lista fumetti</a>
    <div>
        <h2>MODIFICA {{$fumetto->title}}</h2>
    </div>
    
    <div class="form-body">
        <form action="{{ route("fumetti.update", ['fumetti' => $fumetto->id]) }}" method="POST">
            {{-- token utilizzato da laravel per assicurarsi che la chiamata post avvenga tramite un form del sito --}}
            @csrf
            @method("PATCH")
             

            <label for="title">Nome fumetto</label>
            <input type="text" name="title" id="title" placeholder="inserisci nome fumetto" value="{{$fumetto->title}}" required>
            <br>
            <label for="description">description fumetto</label>
            <input type="text" name="description" id="description" placeholder="inserisci descrizione fumetto" value="{{$fumetto->description}}">
            <br>
            <label for="author">author fumetto</label>
            <input type="text" name="author" id="author" placeholder="inserisci author fumetto"  value="{{$fumetto->author}}">
            <br>
            <label for="url">url fumetto</label>
            <input type="text" name="url" id="url" placeholder="inserisci url fumetto"  value="{{$fumetto->url}}">

            <div>
             <button type="reset">Cancella tutti i campi</button>
             <button type="submit">Modifica {{$fumetto->title}}</button>
            </div>
        </form>

    </div>


@endsection