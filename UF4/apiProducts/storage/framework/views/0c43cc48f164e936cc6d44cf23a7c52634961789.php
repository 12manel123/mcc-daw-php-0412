



<form  action="<?php echo e(url('api/products',$producte->id)); ?>" method="POST">
	Nom<input type="text" name="nom" value="<?php echo e($producte['nom']); ?>"><br>
	Desc.<input type="text" name="descripcio" value="<?php echo e($producte['descripcio']); ?>"><br>
	Preu<input type="number" name="preu" value="<?php echo e($producte['preu']); ?>"><br>
		<?php echo method_field('PUT'); ?>
	<br><input type="submit" value="Actualizar"><br>
</form>

<form method="POST" action="<?php echo e(url('/api/products',$producte->id)); ?>">
	<?php echo method_field('DELETE'); ?>
<input type="submit" value="Eliminar" name="">
</form><?php /**PATH /home/usuari/projectesLaravel/apiProducts/resources/views/productes/preview.blade.php ENDPATH**/ ?>