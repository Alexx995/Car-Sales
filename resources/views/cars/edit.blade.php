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
<h1>Edit Task</h1>
<hr>
<form action="{{route('cars.update', $car)}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Licence Number</label>
        <input type="text" value="{{$car->registration_licence}}" class="form-control" id="registration_licence"  name="registration_licence" >
    </div>
    <div class="form-group">
        <label for="description">Brand</label>
        <input type="text" value="{{$car->brand}}" class="form-control" id="carBrand" name="brand" >
    </div>
    <div class="form-group">
        <label for="description">Model</label>
        <input type="text" value="{{$car->model}}" class="form-control" id="carModel" name="model" >
    </div>
    <div class="form-group">
        <label for="description">Manufacture_Date</label>
        <input type="date" value="{{$car->manufacture_date}}" class="form-control" id="manufacture_date" name="manufacture_date" >
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" value="{{$car->description}}" class="form-control" id="carDescription" name="description" >
    </div>
    <div class="form-group">
        <label for="description">Properties</label>
        <input type="text" value="{{$car->properties}}" class="form-control" id="carProperties" name="properties" >
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
