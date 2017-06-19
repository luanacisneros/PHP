<?php
    	
        if(isset($_POST["Mensaje"])){
            $string = $_POST["Mensaje"];
            echo md5($string);
        }
    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>

	<form style="float: left;" method="POST" action="">
		Mensaje: <input type="text" name="Mensaje"/>
		<br/><br/>
		<input type="submit" value="Convertir a MD5">
	</form>

    
</body>
</html>