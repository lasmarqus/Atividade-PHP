<?php
define('PI', 3.141592);
$R_esf = 2;
$Area = 4;
$R2 = ($R_esf*$R_esf);

echo "ARÉA: ".$Area*PI*$R2;
echo "<br>";
echo "VOLUME: ".($Area*PI*$R2*$R_esf)/3;

?>