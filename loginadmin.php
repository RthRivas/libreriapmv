<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
	<header>
		<?php
	    	include 'menus/header.html';
	 	?>
	</header>
	<center>
	<form action="backend.php">
		<h2>Iniciar Sesion Administrativo</h2>
		<input type="text" name="txtusuarioemail" placeholder="Usuario o Correo" required/><br>
		<br><input type="password" name="txtpass" placeholder="Contraseña" required><br><br>
		<br><button class="boton" type="submit" font="sans-serif" name="btniniciar">
			Administrador</button><br><br>
			
		</form>
		No eres usuario aun? <a href="registro.php">Registrate!</a>	
	</center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 <footer>
	 	<?php 
			include 'menus/footer.html';
		?>
	 </footer>
</body>
</html>
