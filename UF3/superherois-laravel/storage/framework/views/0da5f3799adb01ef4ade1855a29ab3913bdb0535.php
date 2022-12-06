<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">ManelCC SUPERS!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('planets.index')); ?>">Planetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('superpower.index')); ?>">Superpoders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('superhero.index')); ?>">Superherois</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>

	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
</body>
</html><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/plantilles/principal.blade.php ENDPATH**/ ?>