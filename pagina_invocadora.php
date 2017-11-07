<!--Pasando variables por URL-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página invocadora</title>
</head>
<body>
	<?php 
		$peliculafavorita=urlencode("Las cruces sobre el agua");
		echo "<a href='http://localhost:8090/pagina_invocada.php?musicafavorita=$peliculafavorita'>";
		echo "Click aquí para ver cual es mi película favorita";
		echo "</a>";
	?>
</body>
</html>