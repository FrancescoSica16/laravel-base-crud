@extends('layout.main')

@section('title', "Creazione fumetto") 

@section("contenuto")
    <a href="{{route("fumetti.index")}}">Torna alla lista fumetti</a>
    <div>
        <h2>Crea nuovo fumetto</h2>
    </div>
    
    <div class="form-body">
        <form action="{{route('fumetti.store')}}" method="POST">
            {{-- token utilizzato da laravel per assicurarsi che la chiamata post avvenga tramite un form del sito --}}
            
            @csrf 

            <label for="title">Nome fumetto</label>
            <input type="text" name="title" id="title" placeholder="inserisci nome fumetto" required>
            <br>
            <label for="description">description fumetto</label>
            <input type="text" name="description" id="description" placeholder="inserisci descrizione fumetto">
            <br>
            <label for="author">author fumetto</label>
            <input type="text" name="author" id="author" placeholder="inserisci author fumetto">
            <br>
            <label for="url">url fumetto</label>
            <input type="text" name="url" id="url" placeholder="inserisci url fumetto">

            <div>
             <button type="reset">Cancella tutti i campi</button>
             <button type="submit">Inserisci nuovo fumetto</button>
            </div>
        </form>

    </div>


@endsection