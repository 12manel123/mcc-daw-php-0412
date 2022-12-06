<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);

for ($i=1; $i<=10; $i++) { 

	echo $i.' * '.($_GET['N']).' = '.($i*($_GET['N'])).'<br/>';
}

?>