<?php
	session_start();
	if(isset($_REQUEST['caixa'])) {
		$_SESSION['Valors'] = $_REQUEST['caixa'];
	}

?>
<html>
<form action="index.php" method="POST">
	<select name="numcaix">
		<?php
		 for ($i=1; $i <= 10; $i++) { 
		 		if (isset($_REQUEST['numcaix'])&&$i==$_REQUEST['numcaix']){
		 			echo '<option selected>'.$i.'</option>';}
		 		else echo '<option>'.$i.'</option>';
		 	}
		?>
	</select>
	<input type="submit" value="enviar">
</form>

<?php
if (isset($_REQUEST['numcaix']) ){ 
	$i=$_REQUEST['numcaix'];
}

$_SESSION['numcaixes'] = $_REQUEST['numcaix'];

if ($_POST['numcaix'] || $_GET['numcaix']){
		echo '<form action="index.php?numcaix='.$i.'" method="POST">';
		 for ($t=0; $t < $i; $t++) { 
				if (isset($_SESSION['Valors'])) //el if nunca se cumplia porque hacias isset al post, el cual se pierde. pero el session se mantiene
					echo '<input type="text" name="caixa[]" value="'.$_SESSION['Valors'][$t].'"><br>';
				else
					echo '<input type="text" name="caixa[]"><br>';
		 	}
		 
?>

<input type="submit" value="enviar">
</form>
</html>

<?php

}
$suma=0;
foreach ($_POST['caixa'] as $opcio) {
	

	$suma=$suma+$opcio;
}
if ($suma!=0){
	echo "Suma total: ".$suma."<br>";
}
?>