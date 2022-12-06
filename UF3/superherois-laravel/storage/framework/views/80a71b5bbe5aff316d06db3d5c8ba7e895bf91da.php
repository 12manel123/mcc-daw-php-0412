<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(url('mysuperheroes')); ?>">Tornar</a>
    <h2>Editar Superheroi</h2>
<form method="POST" action="<?php echo e(url('mysuperheroes/update',$superhero->id)); ?>">
	<?php echo csrf_field(); ?>
	RealName:<input type="text" name="realname" value="<?php echo e($superhero->realname); ?>"><br>
    Hero Name:<input type="text" name="heroname" value="<?php echo e($superhero->heroname); ?>"><br>
    Gender:
    <select name="gender">
         <?php if($superhero->gender=="male"): ?> 
        <option value="male" selected="">Male</option>
        <option value="female">Female</option>

         <?php endif; ?>

          <?php if($superhero->gender=="female"): ?> 
        <option value="male">Male</option>
        <option value="female" selected="">Female</option>

         <?php endif; ?>

    </select><br>
    Planet
    <select name="planet_id">
        <?php $__currentLoopData = $planetes->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($superhero->planet_id==$planet->id): ?>
                <option value="<?php echo e($planet->id); ?>" selected=""><?php echo e($planet->name); ?></option>
            <?php else: ?>
                <option value="<?php echo e($planet->id); ?>"><?php echo e($planet->name); ?></option>
            <?php endif; ?> 



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <br>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/mysuperheroes/updatesuperhero.blade.php ENDPATH**/ ?>