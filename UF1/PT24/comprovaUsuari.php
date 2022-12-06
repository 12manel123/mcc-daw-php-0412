<?php
session_start();

  $claus['enric']="z67yeeui";  
  $claus['carles']="sdfe3sdf";  
  $claus['Manel']="axeeeldds23";  
  $claus['Anna']="abc1e23";
  $claus['prova']="prova"; 

  if(!isset($_POST['username'])|| !isset($_POST['password'])){
  	$_SESSION['missatge']="Has de validar";
  	header('Location: formLogin.php');
  	exit;
  }
  $username=$_POST['username'];
  $password = $_POST['password'];
  if (isset($claus[$username])&& $claus[$username]==$password){

  	$_SESSION['username']=$username;


  	 header('Location: index.php');
  	 exit;
  }
else{
 	$_SESSION['missatge']="Nom usuari o password incorrecte";
 	header('Location: formLogin.php');
  }
  

?>