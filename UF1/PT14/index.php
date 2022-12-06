<?php
$eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
 "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;


if (!isset($_GET['pais'])&& $_GET['pais']==""){
			foreach ($eu as $index => $element) {
	echo "La capital de ".$index." és ".$element."<br/>";
}
			
	}

	else{
		echo ("La capital de ".$_GET['pais'])." és: ".$eu[($_GET['pais'])];
	}







?>