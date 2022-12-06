<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);

	//echo "Nom: ".$_POST["nom"]."<br/>"."Correu: ".$_POST["email"]."<br/><br/>";




	if (isset($_POST["nom"])){ //si existeix el valor post
		if ($_POST["nom"]!=""){ // si el valor no es buit
			echo $_POST['nom']."<br>";
		}
		else
			echo "Nom en blanc";
	}
	else
		echo "Variable inexistent";



	if (isset($_POST["email"]) && $_POST["email"]!="")
		echo $_POST['email']."<br>";
	else echo "No has enviat email";

	if (isset($_REQUEST["password"]) && $_REQUEST["password"]!=""){
		print_r($_REQUEST["password"]);//request es si es et o post el que sigui

	}

	if (intval($_POST["edat"])<=2000){ // intval permet agafar un valor i pasarlo com valor numeric
		echo $_REQUEST["edat"]." que viejo";
	}







?>