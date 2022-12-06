<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <a href="{{url('superhero')}}">Tornar</a>
    <h2>Editar Superheroi</h2>
<form method="POST" action="{{url('superhero/update',$superhero->id)}}">
	@csrf
	RealName:<input type="text" name="realname" value="{{$superhero->realname}}"><br>
    Hero Name:<input type="text" name="heroname" value="{{$superhero->heroname}}"><br>
    Gender:
    <select name="gender">
         @if($superhero->gender=="male") 
        <option value="male" selected="">Male</option>
        <option value="female">Female</option>

         @endif

          @if($superhero->gender=="female") 
        <option value="male">Male</option>
        <option value="female" selected="">Female</option>

         @endif

    </select><br>
    Planet
    <select name="planet_id">
        @foreach ($planetes->all() as $planet)

            @if($superhero->planet_id==$planet->id)
                <option value="{{$planet->id}}" selected="">{{$planet->name}}</option>
            @else
                <option value="{{$planet->id}}">{{$planet->name}}</option>
            @endif 



        @endforeach
    </select>
    <br>
	<input type="submit" value="Desar">
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif	
@endsection
</body>
</html>