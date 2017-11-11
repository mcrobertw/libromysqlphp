<!--Página que pasa variables por sesión-->
<?php 
	//$_SESSION['nombreusuario']="robert";
	setcookie('nombreusuario','robert',time()+60);
	session_start();
	$_SESSION['autenticacionusuario']=1;
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
		echo "Bienvenido al sitio: ".$_COOKIE['nombreusuario'];
		echo "<a href='http://localhost:8090/pagina_invocada3.php?librofavorito=$librofavorito'>";
		echo "Click aquí para ver cual es mi libro favorito";
		echo "</a>";
	?>
</body>
</html>