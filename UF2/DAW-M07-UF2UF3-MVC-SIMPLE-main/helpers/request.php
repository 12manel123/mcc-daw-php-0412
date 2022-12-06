<?php

function netejarCamp($valor) {
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);

        return $valor; 
}

function obtenir_camp($camp) {
    if(isset($_REQUEST[$camp])) {    
        return netejarCamp($_REQUEST[$camp]);
    }
    return "";    
}

function mostraValor($camp) {
        if(isset($_SESSION[$camp])) {
            echo $_SESSION[$camp];
        }
    }

?>
