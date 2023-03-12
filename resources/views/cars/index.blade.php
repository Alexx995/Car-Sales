{{--@extends('layout.layout')--}}

{{--@section('content')--}}
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
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{{--<form action="{{route('tasks.create')}}">--}}
{{--    <button type="submit">Create New Task</button>--}}
{{--</form>--}}
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Registration Licence</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Manufacture Date</th>
        <th scope="col">Description</th>
        <th scope="col">Properties</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <th scope="row">{{$car->id}}</th>
            <td>{{$car->registration_licence}}</td>
            <td>{{$car->brand}}</td>
            <td><a href="{{route('cars.show', $car)}}">{{$car->model}}</a></td>
            <td>{{$car->price}}</td>
{{--            <td>{{$car->manufacture_date->toFormattedDateString()}}</td>--}}
            <td>{{$car->description}}</td>
            <td>{{$car->properties}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('cars.edit', $car)}}">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>&nbsp;
                    <form action="{{route('cars.destroy', $car)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<form action="{{route('cars.create')}}">
    <button type="submit">Create</button>
</form>
{{--@endsection--}}
