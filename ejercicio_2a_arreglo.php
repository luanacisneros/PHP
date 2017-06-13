<meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

	$productos = array('foco LED 7W' => 34.50, 'Florecente' => 45.50, 'foco comun' => 37.30);
	foreach ($productos as $prod => $valor) {
		echo $prod . $valor;
	}

	
    ?> 
</body>
</html>