<?php
class Model {


    protected $bd;
    protected $usuari="root";
    protected $password="usuari";
    protected $taula;
    protected $database ="supers";

    function __construct() {
		 
		try {
			
			$this->bd = new PDO('mysql:host=localhost;dbname='.$this->database, 
                     $this->usuari, $this->password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
)); 	   

		} catch (PDOException $e) {
			echo "Error: No s'ha pogut connectar amb la base de dades";
			die();
		}

    }

    public function getAll() {
	 $sql = "select * from ".$this->taula;	
         
    	 $ordre = $this->bd->prepare($sql);	
         $ordre->execute();   
         $res = $ordre->fetchAll(PDO::FETCH_ASSOC); 
         return $res;
    }

    public function get($codi) {
	    $sql="select * from ".$this->taula." where id=:codi";  
        $ordre = $this->bd->prepare($sql);	 
        $ordre->bindValue(':codi',$codi);  
        $ordre->execute();   
        $res = $ordre->fetch(PDO::FETCH_ASSOC);
	
        return $res;
   }

    public function delete($codi) {
	     $sql ="delete from ".$this->taula." where id=:codi";
         $ordre = $this->bd->prepare($sql);	 
         $ordre->bindValue(':codi',$codi);		   
	     $res = $ordre->execute();
         return $res;
    }

    public function numPages($num_regs) {

        $sql = "select count(*) from ".$this->taula; //as contador
        $resultat = $this->bd->prepare($sql);
        $resultat->execute();
        $reg = $resultat->fetch(PDO::FETCH_NUM); // ponemos FETCH_ASSOC
        $total_regs = $reg[0]; // y ahora con 'contador' para asi ponerlo sin el _NUM
        // en la primera posiciÃ³ del array
        $total_pags = ceil($total_regs / $num_regs);
        return $total_pags;
    }

    public function getPage($pagina, $numRegs) {
        $inici = ($pagina - 1) * $numRegs;
        $sentencia = $this->bd->prepare("SELECT * from ".$this->taula." LIMIT :ini, :numr");
        $sentencia->bindValue(':ini', $inici, PDO::PARAM_INT);
        $sentencia->bindValue(':numr', $numRegs, PDO::PARAM_INT);
        $sentencia->execute();
        $resultat = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }

}

?>
