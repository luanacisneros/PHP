<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

    $cadena= "caramelo";

    if ($cadena <= 10){
    	echo substr($cadena, 4,6);
    }

    elseif ($cadena >= 10){
    	echo undefined;
    }
    
    ?>
</body>
</html>