<?php

class ControlProva1 {

	public function index() {

		echo "Mètode index<br>";
		echo "Aquest metode es crida automàticament<br>";
		echo "index.php?control=ControlProva1";

	}

	public function salutacions() {
		echo "Mètode Salutacions<br>";
		echo "Aquest metode es crida automàticament<br>";
		echo "index.php?control=ControlProva1&metode=salutacions";

	}
}


?>