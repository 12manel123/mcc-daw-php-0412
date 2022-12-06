<?php	include 'seguretat.php';?>

<?php
if($_POST['min']<=$_POST['max']){
	if(isset($_POST['min'])&&isset($_POST['max'])){
	$_SESSION['min']=$_POST["min"];
	$_SESSION['max']=$_POST["max"];
	$_SESSION['ra']=rand($_SESSION['min'], $_SESSION['max']);

 	header('Location: opcio1.php');
}
}
else{
	echo "Els valors maxim ha de ser superior al minim:";
}


?>


<?php	include 'menu.php';?>
<?php	include 'cap.php';?>





<form action="opcio2.php" method="POST">
	Entra valors a valor:<br>
	Min:<input type="text" name="min"><br>
	Max:<input type="text" name="max"><br>


	<input type="submit" value="Desa">

	

</form>
