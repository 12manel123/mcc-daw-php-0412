<?php	include 'seguretat.php';?>
<?php	include 'menu.php';?>
<?php	include 'cap.php';?>
<?php

session_start();
 $_SESSION['cop1']=$_SESSION['cop1']+1;
?>
Hola has escollit la opcio 1 (PT9)<br>
<?php
$eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
 "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($eu as $index => $element) {
	echo "La capital de ".$index." és ".$element."<br/>";
}



?>