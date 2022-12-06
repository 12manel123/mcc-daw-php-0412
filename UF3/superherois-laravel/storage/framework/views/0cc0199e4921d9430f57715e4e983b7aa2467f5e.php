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


<h2>Grup de <?php echo e($grup->nom); ?></h2>
<table class="table">
	<thead class="thead-dark">

<tr><th>Nom</th><th>Operacions</th> </tr>

</thead>


<?php $__currentLoopData = $grup->superheroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		
		<td><?php echo e($grups->realname); ?></td>
		

		<td>

			<a href="<?php echo e(route('groups.eliminar',$grups->id,$grup->id)); ?>">Esborrar</a>


		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>


</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/groups/llistagroup.blade.php ENDPATH**/ ?>