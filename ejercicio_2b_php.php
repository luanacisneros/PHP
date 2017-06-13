<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

    $valor = "353";
    echo $valor;

        $invertido = strrev ($valor);

        if (strcmp($valor, $invertido) == 0) {
            echo ": Es capicua";
        }
        else 
            echo ": No es capicua";
?>            
</body>
</html>