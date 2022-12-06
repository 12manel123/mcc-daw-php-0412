<?php 
	$numero="";
	if(isset($_POST['numero'])){
		$numero=$_POST['numero'];
	}


?>

<form action='prova4.php' method='POST'>
	<input type='text' name='numero' value='<?php echo $numero; ?>'>
	<input type='submit' value='emviar'>


</form>

<?php
	if(isset($_POST['numero'])){
		$numero=trim($_POST['numero']);
		$numero=htmlspecialchars($numero);

		if($numero!=""){
		echo $numero;}
		else{
			echo "No has posat valor";
		}
	}

?>