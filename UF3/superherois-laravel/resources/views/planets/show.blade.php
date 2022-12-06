@extends('layouts.app')
@section('content')
<strong>Habitants il·lustres:</strong>
<ul>
     @foreach($planet->superheroes as $super)
          <li>{{ $super->heroname }}</li>
     @endforeach
</ul>
@endsection