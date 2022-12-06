<?php

	$opcions=array();
	if(isset($_POST['opcions'])){
		$opcions = $_POST['opcions'];
	}

	$opcions2=array();
	if(isset($_POST['ingredients'])){
		$opcions2 = $_POST['ingredients'];
	}


?>

<html>
<form action="prova3.php" method="POST">
	opcions:
	Vols sal?<input type="checkbox" name="opcions[]" value="sal" <?php if(in_array("sal",$opcions)) echo "checked"; ?>><br>

	Vols tomaquet?<input type="checkbox" name="opcions[]" value="tomaquet" <?php if(in_array("tomaquet",$opcions)) echo "checked"; ?>><br>

	Vols oli?<input type="checkbox" name="opcions[]" value="oli" <?php if(in_array("oli",$opcions)) echo "checked"; ?>><br>
	
	<select name="ingredients[]" multiple>
		<option <?php if(in_array("Sudor",$opcions2)) echo selected; ?>>Sudor</option>
		<option <?php if(in_array("Comida",$opcions2)) echo selected; ?>>Comida</option>
		<option <?php if(in_array("Bebida",$opcions2)) echo selected; ?>>Bebida</option>
	</select><br>

	<input type="text" name="caixa[]"><br>
	<input type="text" name="caixa[]"><br>
	<input type="text" name="caixa[]"><br>
	<input type="text" name="caixa[]"><br>



	<input type="submit" value="enviar">
</form>
</html>

<?php
print_r($_POST);

foreach ($_POST['ingredients'] as $opcio) {
	echo $opcio."<br>";
}
echo "<br>";
foreach ($_POST['opcions'] as $opcio) {
	echo $opcio."<br>";
}

echo "<br>";
foreach ($_POST['caixa'] as $opcio) {
	echo $opcio."<br>";
}
?>