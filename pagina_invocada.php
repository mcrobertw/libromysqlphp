<!--Pasando variables por URL-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página que es invocada</title>
</head>
<body>
	<?php 
		echo "Mi canción favorita es: ";
		echo $_REQUEST['musicafavorita'];
		echo "<br>";
		$variablelocal=5;
		echo "El valor de: <b>".$variablelocal." </b>fue accedido sin REQUEST";
	?>
</body>
</html>