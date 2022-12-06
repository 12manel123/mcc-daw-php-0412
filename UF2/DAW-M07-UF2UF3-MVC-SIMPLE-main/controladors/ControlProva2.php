<?php

class ControlProva2 {

	function __construct() {
        
        // un usuari registrat??
        if (!isset($_SESSION['username'])) {
            header('Location: index.php?control=ControlLogin');
            exit;
        }         
              
        
        
    }

	public function index() {

		echo "Mètode index<br>";
		echo "Aquest metode es crida al posar la URL<br>";
		echo "index.php?control=ControlProva2";

	}

	public function hi() {
		echo "Mètode Salutacions<br>";
		echo "Aquest metode es crida el posar la URL<br>";
		echo "index.php?control=ControlProva2&metode=hi";

	}
}


?>