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


<h2>Grup de {{$grup->nom}}</h2>
<table class="table">
	<thead class="thead-dark">

<tr><th>Nom</th><th>Operacions</th> </tr>

</thead>


@foreach($grup->superheroes as $grups)
	<tr>
		
		<td>{{$grups->realname}}</td>
		

		<td>

			<a href="{{route('groups.eliminar',$grups->id,$grup->id)}}">Esborrar</a>


		</td>
	</tr>
@endforeach
</table>

@endsection


</body>
</html>