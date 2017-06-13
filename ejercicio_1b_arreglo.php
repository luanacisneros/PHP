<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

    $color = array ('rojo,', 'azul,', 'amarillo,', 'verde,', 'blanco');
    $mayus = array_map('strtoupper', $color);
    print_r ($mayus) ;
	
    ?> 
</body>
</html>