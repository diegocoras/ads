<?php
$u=$_POST["tf1"];
$n=$_POST["tf2"];
$m=$_POST["tf3"];
$t=$_POST["tf4"];
$p=$_POST["tf5"];
$q=$_POST["tf6"];
$w=$_POST["tf7"];
$z=$_POST["tf8"];
$r1=($u*$n+$m*$t+$p*$q+$w*$z)/($u+$m+$p+$w);





echo "La altura promedio de árboles en Lima Metropolitana es:".$r1."<br>";

?>