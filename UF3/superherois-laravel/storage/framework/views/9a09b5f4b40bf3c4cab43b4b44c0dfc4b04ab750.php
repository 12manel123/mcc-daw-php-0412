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

<h2>Superherois</h2>

<h3><a href="<?php echo e(url('superhero/create')); ?>">Nou</a></h3><?php echo $__env->make('superhero.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<table class="table">
	<thead class="thead-dark">

<tr><th>Codi</th><th>Nom</th><th>Heroname</th> <th>Gender</th> <th>Planet_id</th><th>Operacions</th> </tr>

</thead>


<?php $__currentLoopData = $superhero; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($hero->id); ?></td>
		<td><?php echo e($hero->realname); ?></td>
		<td><?php echo e($hero->heroname); ?></td>
		<td><?php echo e($hero->gender); ?></td>
		<td><?php echo e($hero->planet->name); ?></td>

		<td>
			<a href="<?php echo e(route('superhero.destroy',$hero->id)); ?>">Esborrar</a>
			<a href="<?php echo e(route('superhero.poders',$hero->id)); ?>">Poders</a>
			<a href="<?php echo e(route('superhero.edit',$hero->id)); ?>">Actualizar</a>
			<a href="<?php echo e(route('superhero.show',$hero->id)); ?>">Mostrar</a>

		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
 <hr>
        <div>
            <?php echo e($superhero->links('pagination::bootstrap-4')); ?>

        </div>
    <hr>
<?php $__env->stopSection(); ?>


</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/superhero/llista.blade.php ENDPATH**/ ?>