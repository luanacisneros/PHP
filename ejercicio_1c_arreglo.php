<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

	define('c',10);
	echo "<table border=1>";
	
	$n=1;
	for ($n1=1; $n1<=c; $n1++){
		if ($n1 % 2 == 0)
 		echo "<tr bgcolor=#bdc3d6>";
 		else
 		echo "<tr>";
 		for ($n2=1; $n2<=c; $n2++){
 			echo "<td>", $n, "</td>";
 			$n=$n+1;
 	 	}
 		echo "</tr>";
	}
	echo "</table>";
	
    
    ?> 
</body>
</html>