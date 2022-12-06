<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<table border='1'><tr>";
	for ($i=1; $i <=($_GET['N']) ; $i++) { 
		echo "<td>".$i."</td>";
	}
echo "</th></table>";
?>