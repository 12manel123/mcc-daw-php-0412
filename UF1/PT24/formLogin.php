<?php
session_start();
?>
<h2>User Login</h2>
<form method="POST" action="comprovaUsuari.php">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit" name="submit" value="Login!" >
</form>

<?php
if (isset($_SESSION['missatge'])){
	echo $_SESSION['missatge'];
}
?>
