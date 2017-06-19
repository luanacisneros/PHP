<?php

   if(isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];
            echo ($nombre);
        }
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>

	<form style="float: left;" method="post" action="">
        Nombre y Apellido: <input type="text" name="nombre" value="">
        <input type="submit" />
    </form>

    
</body>
</html>