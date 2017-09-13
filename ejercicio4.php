<html>
<head>
<title>Ejercicio4</title>
</head>
<body>
<h1>Ejercicio 4</h1>
<?php
$x=0;
$y=3;
$z=5;
$pr=3*pow(5-$x,2)/165;
echo "Cuando el número de inasistencias 
es 0, la probabilidad es ".round($pr,4);
$pr=3*pow(5-$y,2)/165;
echo "<br>Cuando el número de inasistencias 
es 3, la probabilidad es ".round($pr,4);
$pr=3*pow(5-$z,2)/165;
echo "<br>Cuando el número de inasistencias 
es 5, la probabilidad es ".round($pr,4);
?>
</body>
</html>