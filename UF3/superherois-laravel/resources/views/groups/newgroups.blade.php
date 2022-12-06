<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <a href="{{url('groups')}}">Tornar</a>
    <h2>Afegir Nou Grup</h2>

<form method="POST" action="{{url('groups/store')}}">
	@csrf
	Nom:<input type="text" name="nom" value="{{old('nom')}}">@error('nom')
        <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <br>
    <select multiple class="form-control" size="20" name="hero[]">
        @foreach($superheroes as $hero)
        <option value="{{$hero->id}}">{{$hero->heroname}}</option>
        @endforeach
</select>
<br>
	<input type="submit" value="Desar">
</form>
@endsection
</body>
</html>