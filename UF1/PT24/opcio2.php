<?php	include 'seguretat.php';?>
<?php	include 'menu.php';?>
<?php	include 'cap.php';?>
<?php

session_start();
 $_SESSION['cop2']=$_SESSION['cop2']+1;
?>
Hola has escollit la opcio 2(PT8)<br>
<?php

$media;

$Temperatures = [

68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,

68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83

];

foreach ($Temperatures as $index => $element) {
	$media=$media+$element;
	

}

echo "Media: ".round($media/($index+1))."<br/><br/>";



rsort($Temperatures);

$cont=0;
while ($cont<=5){
echo "Maxima ".$cont.": ".$Temperatures[$cont]."<br/>";
$cont++;
}



?>