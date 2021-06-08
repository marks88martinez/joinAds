<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JoinAds</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


        <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <a href="/" class="my-0 mr-md-auto font-weight-normal"><img src="/img/joinads-adx.png" style="width:200px" alt=""></a>
            <nav class="my-2 my-md-0 mr-md-3">
              <a class="btn btn-outline-primary" href="{{route('create')}}">Create New Proyect</a>
            </nav>

          </div>
        @yield('contenido')

    </body>
    <link href="{{ URL::asset('/bootstrap/js/bootstrap.min.js') }}" rel="script">

</html>
