<?php

	$nota[]="Insuficient";
	$nota[]="Suficient";
	$nota[]="Bé";
	$nota[]="Notable";
	
	echo $nota[0]." ".$nota[2];
	
	$prova[]=12;
	$prova[]="holas";
	$prova[]=45.78;
	echo "</br>".$prova[0]." ".$prova[2]."</br>";
	
	$notes = array("Insuf","Suf","Be","Not");
	$notes[]="Exel";
	print_r($notes);
	
	
	$valoracions = ["Insuf","Suf","Be","Not"];
	print_r($valoracions);
	
	$numeros[5]=10;
	$numeros[1]=20;
	print_r($numeros);

	$qualificacions[ins] = "Insuficient";
	$qualificacions[suf] = "Suficient";
	$qualificacions[not] = "Notable";
	print_r($qualificacions);

$notes2 = array("ins" =>"Insuficient","suf"=>"Suficient","not"=>"Notable");
print_r($notes2);


$notes3 = ["ins" =>"Insuficient","suf"=>"Suficient","not"=>"Notable"];
print_r($notes2);


foreach ($notes3 as $index => $element) {
	echo "<br/>".$index." -> ".$element;

}



?>
