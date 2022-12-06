<?php
	$nom="";
	if(isset($_POST['nom'])){
		$nom=$_POST['nom'];
	}
?>
<html>
	<form method="POST" action="recuperaValor.php">
		<input type="text" name="nom" value="<?php echo $nom; ?>">
		<input type="submit" value="enviar">
	</form>
</html>


<?php	echo "Has enviat: ".$_POST['nom'];  ?>