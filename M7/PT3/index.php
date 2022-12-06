<!DOCTYPE html>
<h3>Tabla con while</h3>
 
<?php
//variables
$dia1=date('w');
$hora24=date('H');

//aplicar varaibles
echo "$dia1";
echo "$hora24";
if ($dia1==6||$dia1==0){
echo '<br>Pagina no accedible<br/>';
}
else{
if ($hora24>=8){
echo "Pagina accecible apartir de les 8";
}
}
?>
   

