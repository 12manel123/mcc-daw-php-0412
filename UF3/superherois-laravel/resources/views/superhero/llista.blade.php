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

<h2>Superherois</h2>

<h3><a href="{{url('superhero/create')}}">Nou</a></h3>@include('superhero.search')
<table class="table">
	<thead class="thead-dark">

<tr><th>Codi</th><th>Nom</th><th>Heroname</th> <th>Gender</th> <th>Planet_id</th><th>Operacions</th> </tr>

</thead>


@foreach($superhero as $hero)
	<tr>
		<td>{{$hero->id}}</td>
		<td>{{$hero->realname}}</td>
		<td>{{$hero->heroname}}</td>
		<td>{{$hero->gender}}</td>
		<td>{{$hero->planet->name}}</td>

		<td>
			<a href="{{route('superhero.destroy',$hero->id)}}">Esborrar</a>
			<a href="{{route('superhero.poders',$hero->id)}}">Poders</a>
			<a href="{{route('superhero.edit',$hero->id)}}">Actualizar</a>
			<a href="{{route('superhero.show',$hero->id)}}">Mostrar</a>

		</td>
	</tr>
@endforeach
</table>
 <hr>
        <div>
            {{ $superhero->links('pagination::bootstrap-4') }}
        </div>
    <hr>
@endsection


</body>
</html>