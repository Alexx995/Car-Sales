<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
{{--<h1>Tutorial made by Positronx.io</h1>--}}
</body>
</html>
<h1>Showing Car {{ $car->brand}} {{ $car->model}}</h1>

<div class="jumbotron text-center">
    <p>
        <strong>Registration licence:</strong> {{ $car->registration_licence }}<br>
        <strong>Description:</strong> {{ $car->description }}
        <br>
        <strong>Properties:</strong> {{ $car->properties }}
    </p>
</div>

<form action="{{route('cars.index')}}">
    <button type="submit">Go Back</button>
</form>
