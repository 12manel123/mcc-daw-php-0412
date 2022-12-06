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

<h3><a href="{{url('mysuperheroes/create')}}">Nou</a></h3>
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
			<a href="{{route('mysuperheroes.destroy',$hero->id)}}">Esborrar</a>
			<a href="{{route('mysuperheroes.edit',$hero->id)}}">Actualizar</a>
			<a href="{{route('mysuperheroes.show',$hero->id)}}">Mostrar</a>
			<a href="{{route('mysuperheroes.poders',$hero->id)}}">Poderes</a>

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