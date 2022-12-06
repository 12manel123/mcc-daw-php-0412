<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="<?php echo e(url('superpower/update',$superpower->id)); ?>">
	<?php echo csrf_field(); ?>
	<input type="text" name="description" value="<?php echo e($superpower->description); ?>">
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
</body>
</html><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/superpower/updatesuperpower.blade.php ENDPATH**/ ?>