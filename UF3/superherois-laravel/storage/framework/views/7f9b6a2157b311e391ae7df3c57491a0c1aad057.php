<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(url('planets/update',$planet->id)); ?>">
	<?php echo csrf_field(); ?>
	<input type="text" name="nom" value="<?php echo e($planet->name); ?>">
	<input type="submit" value="Desar">
</form>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>	
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('plantilles.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/planets/updateplanet.blade.php ENDPATH**/ ?>