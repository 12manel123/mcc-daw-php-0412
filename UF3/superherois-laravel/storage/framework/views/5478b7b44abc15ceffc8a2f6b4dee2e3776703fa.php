<!DOCTYPE html>
<html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Planetes!</title>
  </head>
<body>

<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
<div>
	<?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<h2>Planetes</h2>

<h3><a href="<?php echo e(url('planets/new')); ?>">Nou</a></h3>
<table class="table">
	<thead class="thead-dark">

<tr><th>Codi</th><th>Nom</th><th>Operacions</th></tr>
</thead>

<?php $__currentLoopData = $planetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planeta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($planeta->id); ?></td>
		<td><?php echo e($planeta->name); ?></td>

		<td>
			<a href="<?php echo e(route('planets.destroy',$planeta->id)); ?>">Esborrar</a>
			<a href="<?php echo e(url('planets/updateredirection',$planeta->id)); ?>">Actualizar</a>
			<a href="<?php echo e(route('planets.show',$planeta->id)); ?>">Mostrar</a>

		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
	<hr>
	    <div>
	    	<?php echo e($planetes->links('pagination::bootstrap-4')); ?>

	    </div>
    <hr>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/planets/llista.blade.php ENDPATH**/ ?>