<?php

	ini_set('display_errors', 1);//Per mostrar els errors de la pagina
error_reporting(E_ALL);
//------------------------------------------------CREAR VALOR I TIPUS
$num1= 4;//Crear valor habiando un numero
$text="lorem.php";//Crear valor tipo text
$cert=true; //Crear valor bolean

//------------------------------------------------ARRAYS
$mercat["pomes"]=3;//array amb pocicio introduida
$mercat["peres"]=2;
$mercat["taronges"]=5;

$notes = array("Insuf","Suf","Be","Not");//array amb pocicio numerica ordenada

$Temperatures = [ 68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83];
rsort($Temperatures); //Ordena de major a menor un array, i si vols al reves, "sort"

	$empleats = [ //Array dentro de otro array
		["nom"=>"Joan","email"=>"joan@prova.com"],
		["nom"=>"Pep","email"=>"pep@prova.com"],
		["nom"=>"Anna","email"=>"anna@prova.com"],


	];

	$multiciutat=array(

array('ciutat'=>'Tokyo',
'País'=>'Japan',
'Continent'=>'Asia'),
array('ciutat'=>'Mexico ciutat',
'País'=>'Mexico',
'Continent'=>'North America'));
	print_r($multiciutat);


//------------------------------------------------OPERADORS
for ($i=0; $i <$num1; $i++) {  //bucle amb for
	echo '<a href="'.$text.'">LINK'.$num1.' </a>';

}
echo "<br>";
$cont1=0;
while($cont1<=10){ //bucle amb while
	echo $cont1.' x '.$num1.' = '.($cont1*$num1).'<br/>';
	$cont1++;
}

$media=0;
foreach ($Temperatures as $index => $element) { //foreacho operador per buclear arrays
	echo $index;
	$media=$media+$element;
	

}
if($media>70){echo "<br>Fara molta calor<br>";}//Operador if


//---------------------------------------------MOSTRAR

echo "Media: ".round($media/($index+1))."<br/><br/>"; // El round no fica decimals, arondoneix

print_r($Temperatures);

echo "Hi!<br>"; // Mostrar solament text
echo "Tenim".$num1."cames<br>"; //Concatenar es nessesita un .
foreach ($mercat as $key => $value) { // Mostrar les arrays en ordre
	echo $key." ".$value."<br>";
}
foreach ($notes as $key => $value) {
	echo $key." ".$value."<br>";
}
print_r($mercat); //Mostrar arrrays tot tirat

//--------------------------------------------VALORS GET POST

if(isset($_GET['N'])){ //Isset es un si existeix el valor x
	echo "<br>".$_GET['N'];//Mostrar valor introduit per get en la url "?N=2"
}
else{echo "Pasa parametre N";}



?>