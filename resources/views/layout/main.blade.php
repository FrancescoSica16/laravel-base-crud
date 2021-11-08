<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC comics | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Aggiungo style del css compilato. lo faccio attraverso ASSET -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        @yield("cdn-import")
       
    </head>
    <body>
        <!-- inserisco i dati presi da config -> headerNavData  -->
        @include("partial.header")

        <main>
            @yield('contenuto')
        </main>


        @include("partial.footer")

        @yield("script-adder")     
        
        

    </body>
</html>

@section("font-adder")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
@endsection