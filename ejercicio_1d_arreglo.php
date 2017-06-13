<meta charset="UTF-8">
    <title>Primera página PHP</title>
</head>
<body>
    
    <?php
    define('d',4);
	function potencia ($valor1, $valor2){
   		$resultado= pow($valor1, $valor2);
   		return $resultado;
	}
	echo "<table border=1>";
	for ($n1=1; $n1<=d; $n1++){
   		echo "<tr>";
   		for ($n2=1; $n2<=d; $n2++)
      	echo "<td>". potencia($n1,$n2). "</td>";
   		echo "</tr>";
	}
	echo "</table>";

    ?> 
</body>
</html>