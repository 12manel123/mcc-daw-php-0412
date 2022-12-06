<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Endevina</title>
  </head>
  <body>
<div>

    <div class="container">     

    <form method="POST" action="index.php?control=ControlLogin&operacio=login">
                <h2>Login</h2> 
                <div class="form-group">
                    <label>Username</label>  
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">                 
                   <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
                <label><b>Usuari:</b> enric   <b>password:</b> z67yeeui</label>
     </form>       
            
     <?php
           if (isset($_SESSION['missatge'] )) {               
                echo $_SESSION['missatge'];    
                unset( $_SESSION['missatge']);
                
           }
    ?>
           
     </div> 
</div>
</body>
</html>

