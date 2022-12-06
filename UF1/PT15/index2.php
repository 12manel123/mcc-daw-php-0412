<?php
	ini_set('display_errors', 1);
error_reporting(E_ALL);


$multiciutat=array(

array('ciutat'=>'Tokyo',
'País'=>'Japan',
'Continent'=>'Asia'),
array('ciutat'=>'Mexico ciutat',
'País'=>'Mexico',
'Continent'=>'North America'),
array('ciutat'=>'New York ciutat',
'País'=>'USA',
'Continent'=>'North America'),
array('ciutat'=>'Mumbai',
'País'=>'India',
'Continent'=>'Asia'),
array('ciutat'=>'Seoul',
'País'=>'Korea',
'Continent'=>'Asia'),
array('ciutat'=>'Shanghai',
'País'=>'China',
'Continent'=>'Asia'),
array('ciutat'=>'Lagos',
'País'=>'Nigeria',
'Continent'=>'Africa'),
array('ciutat'=>'Buenos Aires',
'País'=>'Argentina',
'Continent'=>'South America'),
array('ciutat'=>'Cairo',
'País'=>'Egypt',
'Continent'=>'Africa'),
array('ciutat'=>'London',
'País'=>'UK',
'Continent'=>'Europe')
);
echo "<table>
<tr>
<th>Ciutat</th> 
<th>País</th> 
<th>Continent</th
</tr>";

	foreach ($multiciutat as $multi) {
		echo "<tr><td>";
		echo $multi['ciutat']."</td><td>".$multi['País']."</td><td>".$multi['Continent']."</td></tr>";

	}
	echo "</table>";







?>