<?php
include_once 'Model.php';

class Usuaris extends Model{
	
    protected $taula ="usuaris";
    
    public function add($nom,$cognoms,$email,$username,$password) {
		$sql ="insert into usuaris(nom,cognoms,email,username,password) values 
				 (:nom,:cognoms,:email,:username,:password)";
		$ordre = $this->bd->prepare($sql);	 
		$ordre->bindValue(':nom',$nom);
		$ordre->bindValue(':cognoms',$cognoms);
		$ordre->bindValue(':email',$email);
		$ordre->bindValue(':username',$username);
		$ordre->bindValue(':password',md5($password));
		$res = $ordre->execute(); 
        return $res;

    }


    public function update($codi,$nom,$cognoms,$email,$username) {
		$sql ="update usuaris set nom=:nom,cognoms=:cognoms, email=:email, username=:username where id=:codi";
		$ordre = $this->bd->prepare($sql);	 
		$ordre->bindValue(':codi',$codi);
		$ordre->bindValue(':nom',$nom);
		$ordre->bindValue(':cognoms',$cognoms);
		$ordre->bindValue(':email',$email);
		$ordre->bindValue(':username',$username);
		$res = $ordre->execute(); 
        return $res;

    }


    public function valida($user,$pwd){
        $sql = "SELECT username,password from usuaris where 
                username = :nom AND password = :pwd";
		$sentencia = $this->bd->prepare($sql);
		$sentencia->bindValue(':nom',$user);
		$sentencia->bindValue(':pwd', md5($pwd));
		$sentencia->execute();
		$resultat = $sentencia->fetch();
		if ($resultat==null)
			return false;
		else
			return true;

  }
  
  



}

?>

