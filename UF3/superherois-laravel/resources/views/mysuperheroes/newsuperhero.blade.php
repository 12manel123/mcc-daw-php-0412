<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <a href="{{url('mysuperheroes')}}">Tornar</a>
    <h2>Afegir Nou Superheroi</h2>
<!--    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  -->
<form method="POST" action="{{url('mysuperheroes/store')}}">
	@csrf
	RealName:<input type="text" name="realname" value="{{old('realname')}}">@error('realname')
        <div class="alert alert-danger">{{ $message }}</div>
@enderror<br>
    Hero Name:<input type="text" name="heroname" value="{{old('heroname')}}">@error('heroname')
        <div class="alert alert-danger">{{ $message }}</div>
@enderror<br>
    Gender:
    <select name="gender">
        <option value="male">Male</option>    
        <option value="female">Female</option>
    </select><br>
    Planet
    <select name="planet_id">
        @foreach ($planetes->all() as $planet)
        <option value="{{$planet->id}}">{{$planet->name}}</option>
        @endforeach
    </select>
    <br>
	<input type="submit" value="Desar">
</form>
@endsection
</body>
</html>