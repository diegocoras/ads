<html>
<head>
<title>Ejercicio5</title>
</head>
<body>
<h1>Ejercicio 5</h1>
<?php
$pesosaco=30;
$cargamento=150;
$sacofinal=$cargamento*1000/$pesosaco;
echo "El número de sacos que se pueden hacer
con ".$cargamento. " toneladas es ".round($sacofinal,0);
?>
</body>
</html>