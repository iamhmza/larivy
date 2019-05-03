<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <!-- Vuetify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vuetify/1.5.13/vuetify.min.css">

    <link href="{{ asset('css/app.css') }}">

    <!-- Styles -->

</head>

<body>
    <div id="app"></div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>