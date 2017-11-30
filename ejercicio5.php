<!-- Manejo de if-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cuántos días tiene cada mes</title>
</head>
<body>
<?php
	$numeromes=date("n");
	if ($numeromes==1) echo "El mes actual tiene 31 días";
	if ($numeromes==2) echo "El mes actual tiene 28 días (a menos que sea bisiesto)";
	if ($numeromes==3) echo "El mes actual tiene 31 días";
	if ($numeromes==4) echo "El mes actual tiene 30 días";
	if ($numeromes==5) echo "El mes actual tiene 31 días";
	if ($numeromes==6) echo "El mes actual tiene 30 días";
	if ($numeromes==7) echo "El mes actual tiene 31 días";
	if ($numeromes==8) echo "El mes actual tiene 31 días";
	if ($numeromes==9) echo "El mes actual tiene 30 días";
	if ($numeromes==10) echo "El mes actual tiene 31 días";
	if ($numeromes==11) echo "El mes actual tiene 30 días";
	if ($numeromes==12) echo "El mes actual tiene 31 días";
?>	
</body>
</html>