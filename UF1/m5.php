<html>
<head>
<title>M5 Manel Carlos</title>
</head>

<body>
<?php
	$linea = new array('3' => 3 );

print_r($linea);
?>
<div class="hello no-items section" id="hello">
    

    <form action="m5.php?linea=2" method="POST"><?php /*if(isset($_POST["line"])){echo $_POST["line"];}*/?>
	<h4>Elegeix linea</h4>
	Origen: 
	<select name="line">

	    <option value="1">1</option>
	    <option value="2">2</option>
	    
	</select>
<br><input type="submit" value="enviar">
</form>
    
    
</div>
</body>
</html>