<?php

$Temperatures = [

68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,

68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83

];

if (($_GET['tipus'])=="caluros"){
	rsort($Temperatures);

$cont=0;
	while ($cont<=5){
echo "Maxima ".$cont.": ".$Temperatures[$cont]."<br/>";
$cont++;
}

}
else{
	if (($_GET['tipus'])=="fresc"){
	sort($Temperatures);

$cont=0;
	while ($cont<=5){
echo "Maxima ".$cont.": ".$Temperatures[$cont]."<br/>";
$cont++;
}
}
}








?>