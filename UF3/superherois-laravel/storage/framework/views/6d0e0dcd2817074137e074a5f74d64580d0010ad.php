<div>
<nav class="navbar navbar-light bg-light">
<form method="GET" action="<?php echo e(route('superhero.index')); ?>" class="form-inline">
	
	<input type="search" name="searchName" value="<?php echo e($filters['searchName']); ?>" placeholder="Heroname" class="form-control mr-sm-2">
	<select type="text" name="searchGender" class="form-control mr-sm-2">
		<option value="">Tria gènere</option>
		<option value="male" <?php echo e($filters['searchGender'] == 'male' ? 'selected' : ''); ?>>Male</option>
		<option value="female"<?php echo e($filters['searchGender'] == 'female' ? 'selected' : ''); ?>>Female</option>
	</select>
	<input type="submit" value="Cercar" class="btn btn-outline-success my-2 my-sm-0">
</form>
</nav>
</div><?php /**PATH /home/usuari/projectesLaravel/superherois-laravel/resources/views/superhero/search.blade.php ENDPATH**/ ?>