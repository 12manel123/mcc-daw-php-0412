<?php
	echo "<h2>Proves parametres GET!</h2><br/>";
	ini_set('display_errors', 1);
error_reporting(E_ALL);

	//print_r($_GET);

	if (!isset($_GET['telefon'])&& $_GET['telefon']==""){
			echo "No has pasat telefon!";
			exit;
	}
	else{
		echo $_GET['telefon'];
	}

	echo $_SERVER['SERVER_ADDR'];
	echo $_GET['telefon'];
	//print_r($_SERVER);
	//phpinfo();



?>