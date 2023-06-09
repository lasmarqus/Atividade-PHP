<?php
$soma = 0;
for($a = 10; $a <= 500;$a++){
    echo $a." ";
    
 if($a%2 == 0){
    $soma+=$a;   
} 
}
echo "<br><br>";
echo "A soma de todos os números pares de 10 a 500 é: " . $soma;
?>