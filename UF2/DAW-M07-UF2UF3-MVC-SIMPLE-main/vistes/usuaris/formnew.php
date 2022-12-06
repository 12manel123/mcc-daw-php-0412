<?php
include_once 'helpers/request.php';
?>

<div class="container">
<h3>Nou Usuari</h3>
<form method="POST" action="index.php?control=ControlUsuaris&operacio=store">
	
  <div class="form-group">
      <label>Nom</label>
      <input type="text" class="form-control" name="nom">      
  </div>
  <div class="form-group">
      <label>Cognoms</label>
      <input type="text" class="form-control" name="cognoms">      
  </div>	
 	
  <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email">      
  </div>

  <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="username">     
  </div>

  <div class="form-group">
      <label>Password</label>
      <input type="text" class="form-control" name="password">      
  </div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  	

   
</form>
<?php
 if(isset($_SESSION['missatge'])) {
      echo $_SESSION['missatge'];
      unset($_SESSION['missatge']);
    }
?>

</div>