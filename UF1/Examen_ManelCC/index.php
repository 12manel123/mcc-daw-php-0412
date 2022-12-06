<?php 
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
   $linia1 = [
                  ['nom'=>'Hospital Bellvitge','minuts'=>2,'km'=>5,'address'=>'Carrer Major,45','estat'=>'oberta'],
                  ['nom'=>'Bellvitge','minuts'=>3,'km'=>2,'address'=>'Carrer Pere IV, 67','estat'=>'oberta'],
                  ['nom'=>'Av. Carrilet','minuts'=>2,'km'=>15,'address'=>'Avinguda Carrilet,78','estat'=>'oberta'],
                  ['nom'=>'Rambla Just Oliveras','minuts'=>2,'km'=>20,'address'=>'Rambla Just Oliveras, 18','estat'=>'oberta'],
                  ['nom'=>'Can Serra','minuts'=>3,'km'=>15,'address'=>'Carrer Mar, 67','estat'=>'oberta'],
                  ['nom'=>'Florida','minuts'=>2,'km'=>22,'address'=>'Carrer Alcalde Maret, 2','estat'=>'tancada'],
                  ['nom'=>'Torrassa','minuts'=>2,'km'=>36,'address'=>'Carrer Pins, 7','estat'=>'oberta'],
                  ['nom'=>'Santa Eulàlia','minuts'=>3,'km'=>10,'address'=>'Carrer Masponts, 7','estat'=>'oberta'],
                  ['nom'=>'Mercat Nou','minuts'=>2,'km'=>9,'address'=>'Carrer del Mercat, 25','estat'=>'oberta']
                ];






?>

<html>
<h1>Parades Línea Blava</h1>
<?php
		foreach ($linia1 as $key => $value) {
			echo '<a href="index.php?numero='.$key.'">'.$value['nom']." - </a>";
		}
		echo "<br>";

		if(isset($_GET["numero"])){
			echo "<br>Trigaras ".$linia1[$_GET["numero"]]["minuts"]." minuts en arribar la parada seguent<br>";
			

		}
?>


<form action="index.php" method="POST">
	<h4>On vols anar?</h4>
	Origen: 
	<select name="origen">
		<?php

			foreach ($linia1 as $key => $value) {
				echo '<option value="'.$key.'"';
				if(isset($_POST['origen'])){if($_POST['origen']==$key){echo "selected";}}
				else if(isset($_COOKIE['origen'])){if($_COOKIE['origen']==$key){echo "selected";}}
				echo '>'.$value['nom']."</option>";
			}
		?>
	</select>
	Desti: 
	<select name="desti">
		<?php

			foreach ($linia1 as $key => $value) {
				echo '<option value="'.$key.'"';
				if(isset($_POST['desti'])){if($_POST['desti']==$key){echo "selected";}}
				else if(isset($_COOKIE['desti'])){if($_COOKIE['desti']==$key){echo "selected";}}
				echo '>'.$value['nom']."</option>";
			}
		?>
	</select>
		
<br><input type="submit" value="enviar">
</form>

<?php

$preu=0;




if(isset($_POST["origen"])&&isset($_POST["desti"])){

	setcookie("origen",$_POST["origen"]);
	setcookie("desti",$_POST["desti"]);



	echo "Has escollit anar entre ".$linia1[$_POST["origen"]]["nom"]." i ".$linia1[$_POST["desti"]]["nom"]."<br>";
	//echo "hola: ".$POST["origen"];
	if($_POST["origen"]<$_POST["desti"]){
		for ($i=$_POST["origen"]; $i <$_POST["desti"] ; $i++) { 
			$preu=$preu+$linia1[$i]["km"];
		}
	}
	else{
		for ($i=$_POST["desti"]; $i <$_POST["origen"] ; $i++) { 
			$preu=$preu+$linia1[$i]["km"];
		}
	}
$preu=$preu*0.35;
	echo "El preu a pagar per anar entre aquestes dues parades és de : ".$preu."€";
}

?>
</html>
