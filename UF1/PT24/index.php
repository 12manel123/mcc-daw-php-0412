<?php	include 'seguretat.php';?><!--Sinonimos: include_once-->
<?php	include 'menu.php';?>
<?php	include 'cap.php';?>

<div class="container">

<h2>
<?php
echo "Hola ".$_SESSION['username'];
?></h2>
Pagina Opcio1 visitada 
<?php echo $_SESSION['cop1'];?>
 vegades.<br>
 Pagina Opcio2 visitada 
<?php echo $_SESSION['cop2'];?>
 vegades.<br>
  Pagina Opcio3 visitada 
<?php echo $_SESSION['cop3'];?>
 vegades.<br>
</div>

<?php	include 'peu.php';?>

