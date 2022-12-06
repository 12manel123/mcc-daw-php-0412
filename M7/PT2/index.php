<!DOCTYPE html>
<h3>Tabla con while</h3>
 
<?php
//variables
$num3=0;
$fi=10;
//aplicar
echo '<table border="1">';

while ($num3<=$fi){
echo "<tr><td>Num while: $num3<td></tr>";
$num3++;
}
echo "</table>";



echo '<table border="1">';
for($num4=0;$num4<=$fi;$num4++) {
echo "<tr><td>Num for: $num4<td></tr>";
}
echo "</table>";
?>
    
