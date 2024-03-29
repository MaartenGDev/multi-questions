<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title>{{ config('app.name') }}</title>
</head>
<body>
<main id="root"></main>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
