<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

    $d=rand(1,20);
  	echo "Numero aleatorio: " . $d . "<br>" ;
  	
  	for ($i=1; $i <= $d ; $i++) { 
      $suma=0;
  		$suma=$d+$i;
  	}

  	echo "Sumatoria:" . $suma;

    ?> 
</body>
</html>