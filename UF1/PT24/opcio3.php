<?php	include 'seguretat.php';?>
<?php	include 'menu.php';?>
<?php	include 'cap.php';?>
<?php

session_start();
 $_SESSION['cop3']=$_SESSION['cop3']+1;
?>
Hola has escollit la opcio 1(PT7)<br>
  <h3>Tabla mutiplicar</h3>
<?php
//variables
$num=1;
$cont=10;
$num2=5;

//aplicar varaibles
while($num<=$cont){
	echo $num.' x '.$num2.' = '.($num*$num2).'<br/>';
	$num++;
}
?>