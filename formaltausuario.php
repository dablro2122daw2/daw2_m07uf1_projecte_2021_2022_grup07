<?php
	session_start();
	echo "<p style='text-align:right'>"."usuari:  ".$_SESSION['user']."</p>";
	echo "<p style='text-align:right'>"."Sessió: ".session_id()."</p>";
 
	if($_SESSION['user']!="admin"){
		echo "Apartat User";
		// $comandes.getAll();
	}
?>

<html> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>

	<h2>Registre de Membres</h2>
	<form method="POST" action="altausuario.php">
		
		Nom d'Usuari:<br/>
		<input type="text" name="user" size="50" /></p>
   
		Contrasenya:<br/>
		<input type="password" name="pass" size="50" /></p>
   
   
		Nom Complet:<br/>
		<input type="text" name="nomcomplet" size="50" /></p>
   
		Adreça Postal Completa:<br/>
		<input type="text" name="Adreça" size="50" /></p>
   
   
		Correu Electrònic:<br/>		   
		<input type="text" name="correu" size="50" /></p>

		Telèfon de Contacte:<br/>
		<input type="tel" name="tlf" maxlength="9" size="50" /></p>

		DNI:<br/>
		<input type="text" name="dni" maxlength="9" size="50" /></p>
   
		Prestec:<br/>
		<select name="prestec">
			<option value="Si">Si</option>
			<option value="No">No</option>
		</select></p>
   
		Data del Prestec:<br/>
   		<input type="date" name="dataPrestec"></p>
   
		ISBN del Llibre:<br/>
		<input type="text" name="ISBN" size="50" />	


		<input type="submit" name="submit" value="registrar-me" />
		<input type="button" value="tornar" onclick="location.href='registroulogin.php'">				
	</form>
</body>
</html>