<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')
<form method="POST" action="{{url('planets/update',$planet->id)}}">
	@csrf
	<input type="text" name="nom" value="{{$planet->name}}">
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