<?php
	$nom1="";
	$nom2="";
	$oper="";
	if(isset($_POST['num1'])&&isset($_POST['num2'])){
		$nom1=$_POST['num1'];
		$nom2=$_POST['num2'];
		
	}
	if (isset($_POST['ope'])){
		$oper=$_POST['ope'];
	}
?>

<html>
<form method="POST" action="index.php">
	Num1: <input type="number" name="num1" value="<?php echo $nom1; ?>">
	<br/>
	Num2: <input type="number" name="num2" value="<?=$nom2 ?>">
	<br/>
	<select name="ope">
		<option value="+"<?php if($oper=="+"){echo "selected";} ?>>Suma</option>
		<option value="-"<?php if($oper=="-"){echo "selected";} ?>>Resta</option>
		<option value="*"<?php if($oper=="*"){echo "selected";} ?>>Mutiplicar</option>
		<option value="/"<?php if($oper=="/"){echo "selected";} ?>>Dividir</option>
	</select>
	<input type="submit" value="Enviar :D" name="boto">
</form>


</html>

<?php

	ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['num1'])&&isset($_POST['num2'])){



if (intval($_POST["num1"])!=0&&intval($_POST["num2"])!=0){

echo "La operació ".(($_POST["num1"]).$_POST["ope"].($_POST["num2"]))." és: ";
	if ($_POST["ope"]=="+")
		echo ((intval($_POST["num1"]))+(intval($_POST["num2"])));
	else if ($_POST["ope"]=="-")
		echo ((intval($_POST["num1"]))-(intval($_POST["num2"])));
	else if ($_POST["ope"]=="*")
		echo ((intval($_POST["num1"]))*(intval($_POST["num2"])));
	else if ($_POST["ope"]=="/")
		echo ((intval($_POST["num1"]))/(intval($_POST["num2"])));


}
else{
		echo "Entra els 2 valors correctament";
}
}
?>