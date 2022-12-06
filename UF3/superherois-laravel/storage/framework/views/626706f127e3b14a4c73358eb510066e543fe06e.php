<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#poder{

			position: absolute;
			width: 500px;
			left: 700px;
		}
		
	</style>
</head>
<body>

<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
<div>
	<?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<h2>Poders de <?php echo e($superhero->heroname); ?></h2>
<h3>Poders asignats</h3>
<table class="table">
	<thead class="thead-dark">

<tr><th>Nom</th><th>Nivell</th><th>Accions</th></tr>

</thead>
<div id="llista">

<?php $__currentLoopData = $superhero->superpowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $powers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
	<td><?php echo e($powers->description); ?></td>
<form action="<?php echo e(route('superhero.canviarpoders',[$superhero->id,$powers->id])); ?>" method="POST">
	<?php echo csrf_field(); ?>

	<td><input type="number" name="nivell" value="<?php echo e($powers->level->amount); ?>"></td>

	<td><input type="submit" value="Canviar" > </form>| <a href="<?php echo e(route('superhero.eliminarpoders',[$superhero->id,$powers->id])); ?>">Eliminar</a></td>

</tr>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
<div id="poder">
<h3>Llista poders</h3>
<form method="POST" action="<?php echo e(route('superhero.afegirpoder',$superhero->id)); ?>">
	<?php echo csrf_field(); ?>
<select multiple class="form-control" size="20" name="poder[]">
		<?php $__currentLoopData = $superpower; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $power): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e($power->id); ?>"><?php echo e($power->description); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<input class="btn btn-dark" value="Asignar" type="submit">

</form>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/superhero/poders.blade.php ENDPATH**/ ?>