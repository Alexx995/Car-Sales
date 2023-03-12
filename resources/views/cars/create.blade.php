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
<h1>Add New Car </h1>
<hr>
<form action="/cars" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Registration</label>
        <input type="text" class="form-control" id="NameTitle"  name="registration_licence" value="{{old('registration_licence')}}">
    </div>
    <div class="form-group">
        <label for="price">Brand</label>
        <input type="text" class="form-control" id="categoriesPrice" name="brand" value="{{old('brand')}}">
    </div>
    <div class="form-group">
        <label for="price">Model</label>
        <input type="text" class="form-control" id="categoriesPrice" name="model" value="{{old('model')}}">
    </div>
    <div class="form-group">
        <label for="price">Manufacture Date</label>
        <input type="date" class="form-control" id="categoriesPrice" name="manufacture_date" value="{{old('manufacture_date')}}">
    </div>
    <div class="form-group">
        <label for="price">Description</label>
        <input type="" class="form-control" id="categoriesPrice" name="description" value="{{old('description')}}">
    </div>
    <div class="form-group">
        <label for="price">Properties</label>
        <input type="text" class="form-control" id="categoriesPrice" name="properties" value="{{old('properties')}}">
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
