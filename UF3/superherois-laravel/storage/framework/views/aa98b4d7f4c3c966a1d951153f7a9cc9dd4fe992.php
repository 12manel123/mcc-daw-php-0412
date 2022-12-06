<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(url('superpower/store')); ?>">
	<?php echo csrf_field(); ?>
	<input type="text" name="description" value="<?php echo e(old('description')); ?>">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/superpower/newsuperpower.blade.php ENDPATH**/ ?>