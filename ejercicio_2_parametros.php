<?php

  if ($_POST){
    $cadena= $_POST['calculo'];

    if ($_POST['boton'] == "="){
        eval('$_POST["calculo"] = '.$_POST['calculo'].';');
        $cadena = $_POST['calculo'];
        echo "Resultado= " . $cadena;
    }
    
    else{
        $cadena= ''.$_POST['calculo'].''.$_POST['boton'].'';
        echo $cadena;
    } 
    }
 ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    <h1>Calculadora</h1>
    <p>Introduzca su calculo:</p>
    
    <form method="post" action="">
        <input style="float: left;" type="text" name="calculo" value=""/>
        <input style="float: left;" type="submit" name="boton" value="="/>
    </form>
    
</body>
</html>