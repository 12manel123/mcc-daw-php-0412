<?php

class controllogin {

    private $usuaris;

    function __construct() {
        include_once 'models/Usuaris.php';
        $this->usuaris = new Usuaris();
    }

    function index() {
        if (!isset($_SESSION['username'])) {
            include_once 'vistes/login/login.php';
        } else {
            header('Location: index.php');
        }
    }

    public function login() {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user = $_POST['username'];
            $pwd = $_POST['password'];
            if ($user != "" && $pwd != "") {
                
                if ($this->usuaris->valida($user, $pwd)) {
                    $_SESSION['username'] = $user;
                                                         
                    header('Location: index.php');
                    exit;
                } else {
                    $_SESSION['missatge'] = "Usuari o password incorrectes";
                    header('Location: index.php?control=ControlLogin');
                    exit;
                }
            } else {
                $_SESSION['missatge'] = "camps obligatoris!!!";
                header('Location: index.php?control=ControlLogin');
                exit;
            }
        } else {
            $_SESSION['missatge'] = "Has de passar pel formulari";
            header('Location: index.php?control=ControlLogin');
            exit;
        }
    }

    public function logout() {
        $_SESSION = [];
        session_unset();
        session_destroy();
         header('Location: index.php?control=ControlLogin');
    }

}

?>