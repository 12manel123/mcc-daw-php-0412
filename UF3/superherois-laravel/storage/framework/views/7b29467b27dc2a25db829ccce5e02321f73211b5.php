<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
<div>
	<?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<h2>Superpoders</h2>

<h3><a href="<?php echo e(url('superpower/create')); ?>">Nou</a></h3>
<table class="table">
<thead class="thead-dark">
<tr><th>Codi</th><th>Nom</th><th>Operacions</th></tr>
</thead>


<?php $__currentLoopData = $superpower; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $power): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($power->id); ?></td>
		<td><?php echo e($power->description); ?></td>

		<td>
			<a href="<?php echo e(route('superpower.destroy',$power->id)); ?>">Esborrar</a>
			<a href="<?php echo e(route('superpower.edit',$power->id)); ?>">Actualizar</a>
		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/superpower/llista.blade.php ENDPATH**/ ?>