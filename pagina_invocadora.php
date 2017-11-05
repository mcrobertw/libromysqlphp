<!--Pasando variables por URL-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página invocadora: Pasando una variable por URL</title>
</head>
<body>
	<?php 
		echo "<a href='http://localhost:8090/pagina_invocada.php?musicafavorita=Rezo'>";
		echo "Click aquí para ver cual es mi película favorita";
		echo "</a>";
	?>
</body>
</html>