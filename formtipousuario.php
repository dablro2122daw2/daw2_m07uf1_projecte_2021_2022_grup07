<?php
	session_start();
	echo "usuari:  ".$_SESSION['user']."<br>";
	echo "Sessió: ".session_id()."</br>";
 
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
    <h2>Seleccioneu el Tipus d'Usuari<br>que voleu crear:</h2>
    <input type="button" value="Usuari Client" onclick="location.href='altausuario.html'">
    <input type="button" value="Bibliotecari" onclick="location.href='altabibliotecario.html'">
    
    <h2>Ja tens compte creat? Accedeix al<br> teu compte:</h2>
    <input type="button" value="Accedir al Meu Compte" onclick="location.href='registroulogin.php'">
</body>
</html>