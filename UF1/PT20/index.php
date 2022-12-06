<?php
$links=0;
if (isset($_POST['num1'])){
		$links=$_POST['num1'];
	}
if (isset($_GET['num1'])){
		$links=$_GET['num1'];
	}
?>

<html>
<body>
	<form method="POST" action="index.php">
	Links: <input type="number" name="num1" value="<?php echo $links; ?>">
	<input type="submit" value="Enviar :D" name="boto">
	</form>
</body>
</html>

<?php
if ($links>=0){
for ($cont=0; $cont<$links; $cont++) { 
	echo '<a href="index.php?n='.($cont+1).'&num1='.$links.'">LINK'.($cont+1).' </a><br>';
}


if (isset($_GET['n'])){
	echo "Pagina ".$_GET['n'];
	}

}
else if ($links<0){
	echo "Esta caca, fica valor valid";
}
?>