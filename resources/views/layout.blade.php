<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Rimo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/telapdv.css')}}" rel="stylesheet"> 
        <link href="{{ asset('css/formpdv.css')}}" rel="stylesheet">
        <link href={{ asset('css/menu.css')}} rel="stylesheet">
        <link href="{{ asset('css/modalProd.css') }}" rel="stylesheet"> --}}
    <link href={{ asset('css/menu.css') }} rel="stylesheet">
    <link href="{{ asset('css/pdv_form.css') }}" rel="stylesheet">

    <!-- Fonts -->

    @livewireStyles


</head>

<body>

    @yield('content')



    @livewireScripts

    <script src="js/app.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Bundle with Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
