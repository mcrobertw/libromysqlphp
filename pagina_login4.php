<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página para autentificarse como usuario del sitio</title>
</head>
<body>
	<form method="post" action="http://localhost:8090/pagina_invocadora4.php">
		<p>Ingrese su nombre: 
			<input type="text" name="usuario">
		</p>
		<p>Ingrese su contraseña:
			<input type="password" name="pass">
		</p>
		<p>
			<input type="submit" name="Submit" value="Submit">
		</p>
	</form>
</body>
</html>