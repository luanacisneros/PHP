	<?php

	session_start();

	if (!isset($_SESSION["ingreso"])) {
  		$_SESSION["ingreso"] = 0;
	}
	else{
  		$_SESSION["ingreso"]++;
	}
	?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>

	<?php
 		echo "Usted ingreso " . $_SESSION["ingreso"]. " veces";
 	?>
      
</body>
</html>