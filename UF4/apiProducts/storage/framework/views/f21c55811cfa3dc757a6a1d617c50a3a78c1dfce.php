<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="<?php echo e(url('api/products')); ?>">
	Nom<input type="text" name="nom"><br>
	Desc.<input type="text" name="descripcio"><br>
	Preu<input type="number" name="preu"><br>
	<input type="submit" name="">
</form>
</body>
</html><?php /**PATH /home/usuari/projectesLaravel/apiProducts/resources/views/create.blade.php ENDPATH**/ ?>