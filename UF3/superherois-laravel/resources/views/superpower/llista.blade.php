<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')
@if (session('status'))
<div>
	{{session('status')}}
</div>
@endif

<h2>Superpoders</h2>

<h3><a href="{{url('superpower/create')}}">Nou</a></h3>
<table class="table">
<thead class="thead-dark">
<tr><th>Codi</th><th>Nom</th><th>Operacions</th></tr>
</thead>


@foreach($superpower as $power)
	<tr>
		<td>{{$power->id}}</td>
		<td>{{$power->description}}</td>

		<td>
			<a href="{{route('superpower.destroy',$power->id)}}">Esborrar</a>
			<a href="{{route('superpower.edit',$power->id)}}">Actualizar</a>
		</td>
	</tr>
@endforeach
</table>

@endsection
</body>
</html>