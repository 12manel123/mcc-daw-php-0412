<?php
include_once 'helpers/request.php';


class ControlUsuaris {

    private $usuaris;
    
    function __construct() {
        // Per gestinar els superherois s'ha de tenir el superpoder de ser
        // un usuari registrat!
        if (!isset($_SESSION['username'])) {
            header('Location: index.php?control=ControlLogin');
            exit;
        }         
              
        // Creem el model amb el que treballarem en aquest controlador
        include_once 'models/Usuaris.php';
        $this->usuaris = new Usuaris();

        
    }

    // mètode que es crida per defecte si no especifiquem cap mètode en el paràmetre 
    // operacio
    
    
    public function index() {
        // No mostrarem tots els superherois de cop
        // els paginarem
        
        // El número de pàgina ens vindrà per paràmetre GET
        // En cas que no hi sigui mostrarem la primera pàgina
        if(isset($_GET['page'])) $numPagina=$_GET['page'];
        else $numPagina=1; 
        // Cada pàgina mostrarà 2 registres
        $numRegsPag=5;
        // Obtenim el número màxim de pàgines
        $total_pags = $this->usuaris->numPages($numRegsPag);
        // Si el número de pàgina és incorrecta mostrem la primera
        if($numPagina<=0 || $numPagina>$total_pags) $numPagina=1; 

        // Obtenim els superpoders de la pàgina indicada
        $res = $this->usuaris->getPage($numPagina,$numRegsPag);  
        include_once 'vistes/templates/header.php';       
        include_once 'vistes/usuaris/llistat.php';
        include_once 'vistes/templates/footer.php';
  }
    
    
    // Per afegir un superheroi 2 passos: 
    // - Mostrar el formulari d'alta
    // - Desar les dades del formulari en la BD


    // Mètode per mostrar el formulari per donar d'alta un nou superheroi
    public function showformnew() {

        include_once 'vistes/templates/header.php';
        include_once 'vistes/usuaris/formnew.php';
        include_once 'vistes/templates/footer.php';
    }

    // mètode per controlar l'emmagatzemar un superheroi a la BD
    public function store() {
        
        
        // Recuperem els camps del formulari
        $nom = obtenir_camp('nom'); 
        $cognoms = obtenir_camp('cognoms');
        $email = obtenir_camp('email');
        $username = obtenir_camp('username');     
        $password = obtenir_camp('password'); 


        
        if($nom=="" || $cognoms=="" || $email=="" || $username=="" || $password=="") {

            $_SESSION['nom'] = $nom;
            $_SESSION['cognoms'] = $cognoms;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['missatge'] = "Camps obligatoris!!";
                            
            header('Location: index.php?control=ControlUsuaris&operacio=showformnew');
            exit;

        }
                 
        // Al model li diem que afegeix un nou superheroi        
        $res = $this->usuaris->add($nom, $cognoms, $email, $username, $password);
        $res = true;
        if ($res) {
            $_SESSION['missatge'] = "alta correcta. Opció deshabilitada";
        } else {
            $_SESSION['missatge'] = "Alta incorrecta";
        }        
       
        header("Location: index.php?control=ControlUsuaris");
    }
    
    // Per actualitzar un superheroi 2 passos: 
    // - Mostrar el formulari d'actualització amb les dades actuals del superheroi
    // - Desar les dades del formulari en la BD


    // Mètode per mostrar el formulari d'actualització d'un superheroi

    public function showformupdate() {

        // Via GET ens passaran el codi de l'heroi que volem modificar
        // Comprovem l'existència del paràmetre
        if(!isset($_GET['codi'])) {
                $_SESSION['missatge'] = "Has de triar un superheroi!";
                header("Location: index.php?control=ControlSuperheroes");
                exit;
        }
        // Recuperem de la BD el super que volem modificar 
        
        $codi = $_GET['codi'];     
        $actual = $this->usuaris->get($codi);
        
        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!
        if (!$actual) {   
            $_SESSION['missatge'] = "Aquest superheroi no existeix!";
            header("Location: index.php?control=ControlSuperheroes");
            exit;
        }  
        
        // Quan es carregui el formulari per primer cop
        // volem que es mostrin les dades actuals del superheroi.
        //      En cas que ja existeixin, voldrà dir que s'ha recarregat aquest formulari
        //      d'actualització perque les dades dels controls del formulari no són correctes
       
        // Mostrem el formulari.. 
        $_SESSION['nom'] = $actual['nom'];
        $_SESSION['cognoms'] = $actual['cognoms'];
        $_SESSION['email'] = $actual['email'];
        $_SESSION['username'] = $actual['username'];
        $_SESSION['password'] = $actual['password'];

        $_SESSION['missatge'] = "Usuari recuperat";

        include_once 'vistes/templates/header.php';
        include_once 'vistes/usuaris/formupdate.php';
        include_once 'vistes/templates/footer.php';       
        
    }

    public function update() {

    
        // Via GET ens passaran el codi de l'heroi que volem modificar
        // Comprovem l'existència del paràmetre
        if(!isset($_GET['codi'])) {
                $_SESSION['missatge'] = "Has de triar un usuari!";
                header("Location: index.php?control=ControlUsuaris");
                exit;
        }
        
        $codi = $_GET['codi'];     
        $actual = $this->usuaris->get($codi);

         if (!$actual) {   
            $_SESSION['missatge'] = "Aquest usuari no existeix!";
            header("Location: index.php?control=ControlUsuaris");
            exit;
        }  
        
        // Recuperem de la BD el super que volem modificar 
       
        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!

        $nom = obtenir_camp('nom'); 
        $cognoms = obtenir_camp('cognoms');
        $email = obtenir_camp('email');
        $username = obtenir_camp('username');     
        $password = obtenir_camp('password'); 



        if($nom=="" || $cognoms=="" || $email=="" || $username=="" || $password=="") {

            $_SESSION['nom'] = $nom;
            $_SESSION['cognoms'] = $cognoms;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['missatge'] = "Camps obligatoris!!";
                            
            header('Location: index.php?control=ControlUsuaris&operacio=showformnew');
            exit;

        }
        // Recuperem els camps del formulari
          
        // Comprovem les restriccions associades a cada camp  
             
           
        
        // Modifiquem les dades del superheroi guardant possibles canvis en la BD
        // $res = $this->supers->update($codi, $heroname, $realname, $gender, $race);

       $res = $this->usuaris->update($codi, $nom, $cognoms, $email, $username, $password);
        $res = true;
        if ($res) {
            $_SESSION['missatge'] = "Canvi correcte. Opció deshabilitada";
        } else {
            $_SESSION['missatge'] = "Canvi incorrecte";
        }        
       
        header("Location: index.php?control=ControlUsuaris");
        
                     
    }




    // Mètode per esborrar un superherou
    public function delete() {
        // Via GET ens passaran el codi de l'heroi que volem esborrar
        // Comprovem l'existència del paràmetre
        if(!isset($_GET['codi'])) {
                $_SESSION['missatge'] = "Has de triar un usuari!";
                header("Location: index.php?control=ControlUsuaris");
                exit;
        }
        // Recuperem de la BD el super que volem modificar 
        $codi = $_GET['codi'];     
        $actual = $this->usuaris->get($codi);
        // Si el id de l'heroi no és correcte i no s'ha pogut recuperar
        // no continuem!
        if (!$actual) {   
            $_SESSION['missatge'] = "Aquest usuari no existeix!";
            header("Location: index.php?control=ControlUsuaris");
            exit;
        }    
        // eborrem el superheroi de la BD
        $res = $this->usuaris->delete($codi);
        $res = true;
        if ($res)
            $_SESSION['missatge'] = "Usuari eliminat.";
        else
            $_SESSION['missatge'] = "EL usuari no s'ha pogut eliminar!";
       
        header("Location: index.php?control=ControlUsuaris");
    }

    

    
    
    
}

?>
