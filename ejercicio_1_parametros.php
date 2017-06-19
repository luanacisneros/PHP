<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

    
    $parametro1 = htmlspecialchars($_GET ['parametro']);
   
       
    if (isset($parametro1) && $parametro1=="filtro"){
    	echo "La cadena ingresada es '" . $parametro1 . "'";
    }

    else {
    	echo "VARIABLE NO VALIDA";
    }
    	
    
    ?>
</body>
</html>