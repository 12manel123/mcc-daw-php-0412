



<form  action="{{url('api/products',$producte->id)}}" method="POST">
	Nom<input type="text" name="nom" value="{{$producte['nom']}}"><br>
	Desc.<input type="text" name="descripcio" value="{{$producte['descripcio']}}"><br>
	Preu<input type="number" name="preu" value="{{$producte['preu']}}"><br>
		@method('PUT')
	<br><input type="submit" value="Actualizar"><br>
</form>

<form method="POST" action="{{url('/api/products',$producte->id)}}">
	@method('DELETE')
<input type="submit" value="Eliminar" name="">
</form>