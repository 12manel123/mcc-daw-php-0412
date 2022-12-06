<?php $__env->startSection('content'); ?>
<strong>Habitants il·lustres:</strong>
<ul>
     <?php $__currentLoopData = $planet->superheroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $super): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($super->heroname); ?></li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/planets/show.blade.php ENDPATH**/ ?>