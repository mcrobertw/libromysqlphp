<!--Página para uso de formularios-->
<?php 
	session_start();
	$_SESSION['nombreusuario']=$_POST['usuario'];
	$_SESSION['passusuario']=$_POST['pass'];
	$_SESSION['autenticacionusuario']=0;
	
	//Comprobando el nombre del usuario y la contraseña
	if(($_SESSION['nombreusuario']=='robert') AND ($_SESSION['passusuario']==123456))
	{
		$_SESSION['autenticacionusuario']=1;
	}
	else
	{
		echo "No tiene permisos para acceder a ésta página";
		exit(0);
	}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página invocadora</title>
</head>
<body>
	<?php 
		$librofavorito=urlencode("Las cruces sobre el agua");
		echo "<a href='http://localhost:8090/pagina_invocada4.php?librofavorito=$librofavorito'>";
		echo "Click aquí para ver cual es mi libro favorito";
		echo "</a>";
	?>
</body>
</html>