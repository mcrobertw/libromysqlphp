<!--Página que recibe valores de una sesión-->
<?php 
	session_start();
	//Comprueba que el usuario ha iniciado sesión con una contraseña válida
	if($_SESSION['autenticacionusuario']!=1)
	{
		echo "Hey.. no tienes permiso para acceder a ésta página";
		exit(0);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página que es invocada  - Mi libro favorito <?PHP echo $_REQUEST['librofavorito']; ?></title>
</head>
<body>
	<?php 
		echo "Mi libro favorito es: ";
		echo $_REQUEST['librofavorito'];
		echo "<br>";
		$variablelocal=5;
		echo "El valor de: <b>".$variablelocal." </b>fue accedido sin REQUEST";
	?>
</body>
</html>