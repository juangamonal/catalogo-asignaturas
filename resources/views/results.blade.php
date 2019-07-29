<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Catálogo de Asignaturas</title>

        <!-- importar app.css -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('app.header')
        @include('app.title')

        <div id="app">
            <list :facultad="{{ $facultad }}" :carrera="{{ $carrera }}"></list>
        </div>

        @include('app.footer')

        <!-- importar app.js -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- importar components -->
        <script src="{{ asset('js/results.js') }}"></script>
    </body>
</html>
