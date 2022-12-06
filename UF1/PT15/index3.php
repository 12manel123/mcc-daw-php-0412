<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);

	echo "Nom: ".$_POST["nom"]."<br/>"."Correu: ".$_POST["email"]."<br/><br/>";

	print_r($_REQUEST);



	if (isset($_POST["nom"])){
		if ($_POST["nom"]!=""){
			echo $_POST['nom'];
		}
		else
			echo "Nom en blanc";
	}
	else
		echo "Variable inexistent";



	if (isset($_POST["email"]) && $_POST["email"]!="")
		echo $_POST['email'];
	else echo "No has enviat email";





?>