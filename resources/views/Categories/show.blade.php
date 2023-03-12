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
<h1>Showing Category {{ $category->name }}</h1>

<div class="jumbotron text-center">
    <p>
        <strong>Task Title:</strong> {{ $category->name }}<br>
        <strong>Description:</strong> {{ $category->price }}
    </p>
</div>

<form action="{{route('categories.index')}}">
    <button type="submit">Go Back</button>
</form>
