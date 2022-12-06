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


<h2>Groups</h2>

<h3><a href="<?php echo e(url('groups/newgroups')); ?>">Nou</a></h3>
<table class="table">
	<thead class="thead-dark">

<tr><th>Codi</th><th>Nom</th><th>Operacions</th> </tr>

</thead>


<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($group->id); ?></td>
		<td><?php echo e($group->nom); ?></td>


		<td>
			<a href="<?php echo e(route('groups.destroy',$group->id)); ?>">Esborrar</a>
			<a href="<?php echo e(route('groups.mostrar',$group->id)); ?>">Editar</a>


		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
 <hr>
        <div>
            <?php echo e($groups->links('pagination::bootstrap-4')); ?>

        </div>
    <hr>
<?php $__env->stopSection(); ?>


</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/groups/llista.blade.php ENDPATH**/ ?>