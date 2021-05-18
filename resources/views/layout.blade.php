<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
         
        <title>Rimo</title>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet"> 
        <link href="{{ asset('css/telapdv.css')}}" rel="stylesheet">
        <link href={{ asset('css/menu.css')}} rel="stylesheet">
      
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
       @livewireStyles   
      
       
    </head>
    <body>
        @yield('content')

        @livewireScripts
    </body>
</html>
