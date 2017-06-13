<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

	$frutas = array('Manzana'=>'20', 'Peras'=>'13', 'Bananas'=>'10', 'Mandarinas'=>'17');
 
	foreach($frutas as $nombre=>$valor){
		echo "Fruta: " . $nombre . " Valor: " . $valor . "<br>";
	}
    
    ?> 
</body>
</html>