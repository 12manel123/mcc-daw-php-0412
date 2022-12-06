

<div class="container">
<?php

        echo "<a href='index.php?control=ControlSuperheroes&operacio=showformnew'>Nou</a>";
		
?>
 <table class="table table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codi</th>
      <th scope="col">Nom Súper</th>
      <th scope="col">Nom real</th>
      <th scope="col">Gènere</th>
      <th scope="col">Procedència</th>  
      <th scope="col">Puntuacio</th>       
      <th scope="col" colspan="3">Operacions</th>
             
    </tr>
  </thead>
  <tbody>

<?php
        
	
  foreach($res as $super) {
		echo "<tr>"; 
		echo "<td>".$super['id']."</td>";
		echo "<td>".$super['heroname']."</td>";
		echo "<td>".$super['realname']."</td>";
		echo "<td>".$super['gender']."</td>";
		echo "<td>".$super['race']."</td>";
    echo "<td>".$super['puntuacio']."<a href='index.php?control=ControlSuperheroes&operacio=sumar&codi=".$super['id']."'> + </a><a href='index.php?control=ControlSuperheroes&operacio=restar&codi=".$super['id']."'> - </a></td>";
		echo "<td>Esborrar</td>";


		echo "<td><a href='index.php?control=ControlSuperheroes&operacio=delete&codi=".$super['id']."'>
                     Esborrar</td>";
		echo "<td><a href='index.php?control=ControlSuperheroes&operacio=showformupdate&codi=".$super['id']."'>
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
          echo "<li class='page-item'><a class='page-link' href='index.php?control=ControlSuperheroes&page=".$i."' >".$i."</a></li>";
      }
    ?>
  </ul>
</nav>

<form action="index.php?control=ControlSuperheroes" method="post">
  <input type="number" id="selector" name="selector">
  <button type="submit"> Canviar </button>
</form>




</div>
