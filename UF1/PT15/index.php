<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);

	$array2 = array(
		array(7,8,9),
		array(10,11,12,13),
		array(14,15) );
	print_r($array2)."<br/>";

	echo "<br/>".$array2[0][0];
	echo "<br/>".$array2[1][3];
	echo "<br/>".$array2[2][1]."</br>";
	print_r ($array2[1]);

	echo count($array2)."<br/>";
	for($i=0;$i<3;$i++){
		for($j=0;$j<count($array2[$i]);$j++){
				echo $array2[$i][$j]." ";

		}
		echo "<br/>";
	}

	echo "<br/>";
	foreach ($array2 as $element) {
		foreach ($element as $sublement) {
			echo $sublement."";
		}
		echo "<br/>";
	
	}
	$empleats = [
		["nom"=>"Joan","email"=>"joan@prova.com"],
		["nom"=>"Pep","email"=>"pep@prova.com"],
		["nom"=>"Anna","email"=>"anna@prova.com"],


	];
	echo "<br/>";
	foreach ($empleats as $empleat) {
		echo "Nom: ".$empleat['nom']."<br/> Correu: ".$empleat['email']."<br/><br/>";

	}
	




?>