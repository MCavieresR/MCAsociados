<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <!--link href="{{ asset('css/cards.css') }}" rel="stylesheet"-->
    <title>Prueba Template 1</title>
</head>

<body>
    <div id="wrapper" class="animate">
        
        @include('layouts.partials._navigation')
        
        @yield('content')
        
    </div>

    @include('layouts.partials._footer')
    
</body>

</html>
