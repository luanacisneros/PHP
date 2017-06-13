<meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php

	$inv = array (1,2,3,4,5,6,7,8,9,0);
	$invertido = array_reverse($inv);
	print_r ($invertido);
    
    ?> 
</body>
</html>