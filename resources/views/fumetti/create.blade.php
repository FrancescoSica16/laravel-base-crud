@extends('layout.main')

@section('title', "Creazione fumetto") 

@section("contenuto")

    <div>
        <h2>Crea nuovo fumetto</h2>
    </div>
    
    <div class="form-body">
        <form action="POST">

            <label for="name">Nome fumetto</label>
            <input type="text" name="name" id="name" placeholder="inserisci nome fumetto">
            
        </form>

    </div>


@endsection