<html>
<form action="preferencies.php" method="POST">
	Tamany Font:<br>
	<select name="tamany"> 
		<option value="10" <?php if($_COOKIE['tamany']=="10"){ echo "selected";}?>>10</option>
		<option value="12" <?php if($_COOKIE['tamany']=="12"){ echo "selected";}?>>12</option>
		<option value="14" <?php if($_COOKIE['tamany']=="14"){ echo "selected";}?>>14</option>
		<option value="20" <?php if($_COOKIE['tamany']=="20"){ echo "selected";}?>>20</option>
		
	</select>
<br>Color font:<br>
	<input type="radio" name="colors" value="red" <?php if(isset($_COOKIE['colors'])&&$_COOKIE['colors']=="red"){ echo "checked";}?>>Vermell
	<input type="radio" name="colors" value="green" <?php if($_COOKIE['colors']=="green"){ echo "checked";}?>> Verd
	<input type="radio" name="colors" value="blue" <?php if($_COOKIE['colors']=="blue"){ echo "checked";}?>> Blau<br><br>

	<input type="submit" value="Enviar :D" name="enviar">

</form>
<?php
/*if($_SERVER['REQUEST_METHOD']=='POST'){}*/
if(isset($_POST["enviar"])){

	if(isset($_POST["tamany"])){
		setcookie("tamany",$_POST["tamany"]);
	}

	if(isset($_POST["colors"])){
		setcookie("colors",$_POST["colors"]);
	}
	header('Location: index.php');
}
?>
</html>