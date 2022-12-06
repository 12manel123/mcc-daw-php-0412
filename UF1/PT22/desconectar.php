<?php
	if(isset($_COOKIE["tamany"])){setcookie("tamany",'',time()-60);}
	if(isset($_COOKIE['colors'])){setcookie("colors",'',time()-60);	}
	header('Location: index.php');
?>