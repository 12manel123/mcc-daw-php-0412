<?php
echo "<hr>";
if(isset($_POST['ciutat'])){
$html2 = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/daily?q=".$_POST['ciutat'].",es&units=metric&cnt=7&appid=121d3d89bc66ab29e5d4b86f70f95ae3");
$json2 = json_decode($html2);
foreach($json2->list as $dia){
	echo date('l',$dia->dt);
	echo $dia->temp->day;
	$image = "http://api.openweathermap.org/img/w/" .$dia->weather[0]->icon.".png";
	echo "<img src='$image'><br>";
}
}
?>
<form method="POST">
	<input type="text" name="ciutat">
	<input type="submit" name="">
</form>