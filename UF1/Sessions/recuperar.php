<?php
	session_start();

	if(isset($_SESSION['nom'])){
	echo $_SESSION['nom'];}
	else{
		echo "No hi ha valor nom";
		exit;
	}



?>