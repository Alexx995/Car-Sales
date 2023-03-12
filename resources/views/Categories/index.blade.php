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
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td><a href="{{route('categories.show', $category)}}">{{$category->name}}</a></td>
            <td>{{$category->price}}</td>
            <td>{{$category->created_at->toFormattedDateString()}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('categories.edit', $category)}}">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>&nbsp;
                    <form action="{{route('categories.destroy', $category)}}" method="POST">
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

<form action="{{route('categories.create')}}">
    <button type="submit">Create</button>
</form>
{{--@endsection--}}
