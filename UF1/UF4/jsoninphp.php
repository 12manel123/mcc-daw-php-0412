<?php

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
$obj = json_decode($json);
echo $obj->a;

$array = json_decode($json,true);
echo $array["e"];
echo "<hr>";


$cadenajson2 = '{"empleats": [{ "Nom":"Joan" , "Cognom1":"Gracia" },{ "Nom":"Anna" , "Cognom1":"Ponts" },{ "Nom":"Josep" , "Cognom1":"Llopis" }]}';
$obj = json_decode($cadenajson2);
$array2 = json_decode($cadenajson2,true);

foreach ($obj->empleats as $empleat) {
	echo $empleat->Nom."<br>";	
}
echo "<hr>";

foreach ($array2['empleats'] as $empleat) {
	echo $empleat['Nom']."<br>";	
}

echo "<hr>";
$html = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Torredembarra&units=metric&appid=121d3d89bc66ab29e5d4b86f70f95ae3");
$json = json_decode($html);
print_r($json->main->temp);

echo "<hr>";
$html = file_get_contents("https://www.vidalibarraquer.net");
echo $html;

?>