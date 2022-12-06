<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);

	

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






	






?>