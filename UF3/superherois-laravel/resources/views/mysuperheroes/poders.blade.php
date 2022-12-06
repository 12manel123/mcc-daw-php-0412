<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#poder{

			position: absolute;
			width: 500px;
			left: 700px;
		}
		
	</style>
</head>
<body>
@extends('layouts.app')
@section('content')
@if (session('status'))
<div>
	{{session('status')}}
</div>
@endif

<h2>Poders de {{$superhero->heroname}}</h2>
<h3>Poders asignats</h3>
<table class="table">
	<thead class="thead-dark">

<tr><th>Nom</th><th>Nivell</th><th>Accions</th></tr>

</thead>
<div id="llista">

@foreach($superhero->superpowers as $powers)
<tr>
	<td>{{ $powers->description}}</td>
<form action="{{route('mysuperheroes.canviarpoders',[$superhero->id,$powers->id])}}" method="POST">
	@csrf

	<td><input type="number" name="nivell" value="{{$powers->level->amount}}"></td>

	<td><input type="submit" value="Canviar" > </form>| <a href="{{route('mysuperheroes.eliminarpoders',[$superhero->id,$powers->id])}}">Eliminar</a></td>

</tr>



@endforeach
</table>
</div>
<div id="poder">
<h3>Llista poders</h3>
<form method="POST" action="{{route('mysuperheroes.afegirpoder',$superhero->id)}}">
	@csrf
<select multiple class="form-control" size="20" name="poder[]">
		@foreach($superpower as $power)
		<option value="{{$power->id}}">{{$power->description}}</option>
		@endforeach
</select>
<input class="btn btn-dark" value="Asignar" type="submit">

</form>
</div>
@endsection
</body>
</html>