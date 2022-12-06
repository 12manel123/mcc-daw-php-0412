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


<h2>Groups</h2>

<h3><a href="{{url('groups/newgroups')}}">Nou</a></h3>
<table class="table">
	<thead class="thead-dark">

<tr><th>Codi</th><th>Nom</th><th>Operacions</th> </tr>

</thead>


@foreach($groups as $group)
	<tr>
		<td>{{$group->id}}</td>
		<td>{{$group->nom}}</td>


		<td>
			<a href="{{route('groups.destroy',$group->id)}}">Esborrar</a>
			<a href="{{route('groups.mostrar',$group->id)}}">Editar</a>


		</td>
	</tr>
@endforeach
</table>
 <hr>
        <div>
            {{ $groups->links('pagination::bootstrap-4') }}
        </div>
    <hr>
@endsection


</body>
</html>