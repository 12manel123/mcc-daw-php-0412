<!DOCTYPE html>
<html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Planetes!</title>
  </head>
<body>
@extends('layouts.app')
@section('content')
@if (session('status'))
<div>
	{{session('status')}}
</div>
@endif

<h2>Planetes</h2>

<h3><a href="{{url('planets/new')}}">Nou</a></h3>
<table class="table">
	<thead class="thead-dark">

<tr><th>Codi</th><th>Nom</th><th>Operacions</th></tr>
</thead>

@foreach($planetes as $planeta)
	<tr>
		<td>{{$planeta->id}}</td>
		<td>{{$planeta->name}}</td>

		<td>
			<a href="{{route('planets.destroy',$planeta->id)}}">Esborrar</a>
			<a href="{{url('planets/updateredirection',$planeta->id)}}">Actualizar</a>
			<a href="{{route('planets.show',$planeta->id)}}">Mostrar</a>

		</td>
	</tr>
@endforeach
</table>
	<hr>
	    <div>
	    	{{ $planetes->links('pagination::bootstrap-4') }}
	    </div>
    <hr>
@endsection
</body>
</html>