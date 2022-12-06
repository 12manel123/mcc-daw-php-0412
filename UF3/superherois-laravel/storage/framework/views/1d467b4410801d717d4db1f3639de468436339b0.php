  
<?php $__env->startSection('content'); ?>
<div class="float-right">
    <a href="<?php echo e(url('superhero')); ?>"> Tornar</a>
</div>
<h2> Fitxa Superheroi</h2>
              
<div>
        
    <div>
        <strong>Hero name:</strong>
        <?php echo e($superhero->heroname); ?>

    </div>
        
    <div>            
       <strong>Real name:</strong>
       <?php echo e($superhero->realname); ?>

    </div>
    <div>
        <strong>Gender:</strong>
        <?php echo e($superhero->gender); ?>

    </div>
        
    <div>
        <strong>Planet:</strong>
        <?php echo e($superhero->planet->name); ?>

    </div>
        
    <div>
        <strong>Powers:</strong>
        <ul>
        <?php $__currentLoopData = $superhero->superpowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $power): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
            <?php echo e($power->description); ?> - <?php echo e($power->level->amount); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/superhero/show.blade.php ENDPATH**/ ?>