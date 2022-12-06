<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(url('mysuperheroes')); ?>">Tornar</a>
    <h2>Afegir Nou Superheroi</h2>
<!--    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>  -->
<form method="POST" action="<?php echo e(url('mysuperheroes/store')); ?>">
	<?php echo csrf_field(); ?>
	RealName:<input type="text" name="realname" value="<?php echo e(old('realname')); ?>"><?php $__errorArgs = ['realname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
    Hero Name:<input type="text" name="heroname" value="<?php echo e(old('heroname')); ?>"><?php $__errorArgs = ['heroname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br>
    Gender:
    <select name="gender">
        <option value="male">Male</option>    
        <option value="female">Female</option>
    </select><br>
    Planet
    <select name="planet_id">
        <?php $__currentLoopData = $planetes->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($planet->id); ?>"><?php echo e($planet->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <br>
	<input type="submit" value="Desar">
</form>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/mysuperheroes/newsuperhero.blade.php ENDPATH**/ ?>