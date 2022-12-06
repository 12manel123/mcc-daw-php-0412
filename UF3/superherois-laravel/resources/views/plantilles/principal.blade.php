<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/')}}">ManelCC SUPERS!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('planets.index')}}">Planetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('superpower.index')}}">Superpoders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('superhero.index')}}">Superherois</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>