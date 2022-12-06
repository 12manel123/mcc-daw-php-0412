<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);

$horari = array("dilluns" => array("08:00-09:00"=>"M2","09:00-10:00"=>"M2","10:00-11:00"=>"M3","11:30-12:30"=>"M3","12:30-13:30"=>"M4","13:30-14:30"=>"M4"),"dimarts" => array("08:00-09:00"=>"M3","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2"),
"dimecres"=>
array("08:00-09:00"=>"M4","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2"),
"dijous" =>
array("08:00-09:00"=>"M5","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2"),
"divendres" =>
array("08:00-09:00"=>"M6","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2")
);



switch ($_POST["dies"]) {
	case 'dl':

	foreach ($horari["dilluns"] as $clau1 => $clau2) {
	echo $clau1.": ".$clau2."<br>";
	}
	break;

case 'dm':

	foreach ($horari["dimarts"] as $clau1 => $clau2) {
	echo $clau1.": ".$clau2."<br>";
	}
	break;
	case 'dc':

	foreach ($horari["dimecres"] as $clau1 => $clau2) {
	echo $clau1.": ".$clau2."<br>";
	}
	break;
	case 'dj':

	foreach ($horari["dijous"] as $clau1 => $clau2) {
	echo $clau1.": ".$clau2."<br>";
	}
	break;
	case 'dv':

	foreach ($horari["divendres"] as $clau1 => $clau2) {
	echo $clau1.": ".$clau2."<br>";
	}
	break;
	
	default:
		echo "ha fallao";
		break;
}







?>

