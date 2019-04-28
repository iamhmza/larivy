<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Vuetify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vuetify/1.5.13/vuetify.min.css">

    <link href="{{ asset('css/app.css') }}">

    <!-- Styles -->

</head>

<body>
    <div id="app">
        <example-component></example-component>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
