<!DOCTYPE html>
<style type="text/css">
	
p{
	<?php
		
		if(isset($_COOKIE['colors'])){
			echo "color: ".$_COOKIE['colors'].";";
		}
		if(isset($_COOKIE['tamany'])){
			echo "font-size: ".$_COOKIE['tamany']."px;";
		}
	?>
}



</style>
<html>
<body>
<p>Benvinguts!</p>
<a href="preferencies.php">Preferencies </a> 
<a href="desconectar.php">Desconectar</a><br>
<p>La meva aplicació</p>
<body>
</html>