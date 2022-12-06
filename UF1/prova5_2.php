<?php
	echo "Hola lhe creat<br>";
	
	setcookie("nom","Manel",time()+3600);
	if(isset($_COOKIE['nom'])){
		echo $_COOKIE['nom'];
	}
	
?>