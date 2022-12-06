<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(url('groups')); ?>">Tornar</a>
    <h2>Afegir Nou Grup</h2>

<form method="POST" action="<?php echo e(url('groups/store')); ?>">
	<?php echo csrf_field(); ?>
	Nom:<input type="text" name="nom" value="<?php echo e(old('nom')); ?>"><?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>
    <select multiple class="form-control" size="20" name="hero[]">
        <?php $__currentLoopData = $superheroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($hero->id); ?>"><?php echo e($hero->heroname); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<br>
	<input type="submit" value="Desar">
</form>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/groups/newgroups.blade.php ENDPATH**/ ?>