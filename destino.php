<html>
<head>
</head>
<body>
<?php
	$cad = $_POST["cadena"];
	$vec = $_POST["veces"];
	for ($contador = 0; $contador < $vec; $contador++) {
		echo $cad;
		if ($contador != $vec - 1){echo "-";}
	}
?>
</body>
</html>

