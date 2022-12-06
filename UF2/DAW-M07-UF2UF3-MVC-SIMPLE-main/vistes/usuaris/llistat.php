

<div class="container">
<?php

        echo "<a href='index.php?control=ControlUsuaris&operacio=showformnew'>Nou</a>";
		
?>
 <table class="table table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom </th>
      <th scope="col">Cognoms</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>    
      <th scope="col">Password</th>      
      <th scope="col" colspan="3">Operacions</th>
             
    </tr>
  </thead>
  <tbody>

<?php
        
	
    	foreach($res as $usuari) {
		echo "<tr>"; 
		echo "<td>".$usuari['id']."</td>";
		echo "<td>".$usuari['nom']."</td>";
		echo "<td>".$usuari['cognoms']."</td>";
		echo "<td>".$usuari['email']."</td>";
		echo "<td>".$usuari['username']."</td>";
    echo "<td>".$usuari['password']."</td>";

    
		
		echo "<td><a href='index.php?control=ControlUsuaris&operacio=delete&codi=".$usuari['id']."'>
                     Esborrar</td>";
		echo "<td><a href='index.php?control=ControlUsuaris&operacio=showformupdate&codi=".$usuari['id']."'>
                     Actualitzar</td>";
                
		echo "</tr>";
        }
        echo "</table>";

        if(isset($_SESSION['missatge'])) {
			echo $_SESSION['missatge'];
			unset($_SESSION['missatge']);
		}
		
		
?>

<nav >
  <ul class="pagination">
    <?php
          for ($i=1; $i<=$total_pags; $i++) {
          echo "<li class='page-item'><a class='page-link' href='index.php?control=ControlUsuaris&page=".$i."' >".$i."</a></li>";
      }
    ?>
  </ul>
</nav>




</div>
