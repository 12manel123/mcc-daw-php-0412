<div>
<nav class="navbar navbar-light bg-light">
<form method="GET" action="{{ route('superhero.index')}}" class="form-inline">
	
	<input type="search" name="searchName" value="{{ $filters['searchName'] }}" placeholder="Heroname" class="form-control mr-sm-2">
	<select type="text" name="searchGender" class="form-control mr-sm-2">
		<option value="">Tria gènere</option>
		<option value="male" {{ $filters['searchGender'] == 'male' ? 'selected' : '' }}>Male</option>
		<option value="female"{{ $filters['searchGender'] == 'female' ? 'selected' : '' }}>Female</option>
	</select>
	<input type="submit" value="Cercar" class="btn btn-outline-success my-2 my-sm-0">
</form>
</nav>
</div>