<!DOCTYPE html>
<h3>Hola Titulo 3</h3>
Fin html <br/>
<?php

//textos
echo "test de echo &amp <b>test de negrita</b>";
echo "<h2>Titulo 2</h2>";
print "test de print:<br>";

//variables
$num1=20;
$num2=3.1416;
$num3=10;
$text="hola";
$caracter='a';
$fi=true;

//aplicar varaibles

echo "tens $num1 anys"; //sense concadenar
//echo "tens ".$num1." anys"; //concadenant

if ($num1>=18){
echo '<br>Ets major d\'edat<br/>';
}

while ($num3>=0){
echo "<br>Num: $num3";
$num3--;
}


?>

