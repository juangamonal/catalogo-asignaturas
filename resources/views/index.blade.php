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

        <div id="index">
            <h1>Catálogo de Asignaturas UCSC</h1>

            <p>
                El “Catálogo de Asignaturas UCSC“, contiene los programas correspondientes a cada asignatura vigente dictada por la Universidad. El propósito de este catálogo es que los usuarios puedan acceder al contenido de los programas para los fines que futuros estudiantes y la comunidad universitaria lo requieran. Los programas que se encuentran disponibles no necesariamente corresponden a la última versión, y solamente constituyen una referencia para los usuarios. 
            </p>

            <a href="/buscador" class="btn btn-primary form-control">Ir a buscador</a>
        </div>

        @include('app.footer')

        <!-- importar app.js -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
