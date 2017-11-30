<!-- Manejo de if else-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>¿Estamos en un año bisiesto?</title>
</head>
<body>
<?php
	$añobisiesto=date("L");
	if ($añobisiesto==1) echo "Estamos en un año bisiesto";
	else echo "Este no es un año bisiesto";

?>	
</body>
</html>