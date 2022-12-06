<?php

class ControlDefault {

    function __construct() {
        
        
    }
    
    public function index() {
        
        include_once 'vistes/templates/header.php';
        include_once 'vistes/default/principal.php';
        include_once 'vistes/templates/footer.php';                 
                              
    }

}

?>
