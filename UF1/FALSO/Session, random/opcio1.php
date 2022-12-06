<?php	include 'seguretat.php';?>
<?php	include 'menu.php';?>
<?php	include 'cap.php';?>

<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);



if (!isset($_SESSION['min'])&&!isset($_SESSION['max'])){
	$_SESSION['min']=1;
	$_SESSION['max']=10;
}

if(!isset($ra)){
	$ra = rand($_SESSION['min'],$_SESSION['max']);
}
if (!isset($_SESSION['ra'])) {
	$_SESSION['ra']=rand($_SESSION['min'], $_SESSION['max']);
}

if(isset($_POST['rei'])){
	$_SESSION['ra']=rand($_SESSION['min'], $_SESSION['max']);
}





if(!isset($errors)){
	$errors=0;
}

?>
<html>

<h1>Taula del <?php echo $_SESSION['ra'];?> del 1 al 10</h1>
<form action="opcio1.php" method="POST">
		<?php
		$errors=0;
		 for ($i=1; $i <= 10; $i++) { 
		 		echo $i." * ".$_SESSION['ra'].' = <input type="text" name="caixa[]"><br>';
		 		$comprovar[$i]=($i*$_SESSION['ra']);
		 }
		




		for ($i=0; $i < 10; $i++) { 
			if(isset($_POST['caixa'][$i])&&isset($comprovar[($i+1)])){
		 			if($_POST['caixa'][$i]==$comprovar[($i+1)]){
					}
					else{
						$errors++;
					}		
			}
		}
		
		?>

	<input type="submit" value="Comprovar" name="comp">

	

</form>

<form action="opcio1.php" method="POST">
		<input type="submit" value="Reiniciar" name="rei">
</form>

<br>
<?php
if(isset($_POST['comp'])){
	if($errors==0){
		echo "BOLT BE! prova amb un altre taula!";
	}
	else{
		echo "Has tingut ".$errors." errors.";
	}
}


?>

</html>