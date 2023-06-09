<?php
$peso = 89;
$altura = 1.60;
$Alt2 = ($altura*$altura);
$calc_imc = $peso/$Alt2;
echo "Calculo IMC: ".$calc_imc;
echo "<br>";

if($calc_imc < 19){
  echo "Abaixo do peso normal";
}elseif($calc_imc < 25){
    echo"Peso Normal";
}elseif($calc_imc < 30){
    echo "Excesso de peso";
}elseif($calc_imc < 35){
    echo "Obesidade Classe I";
}elseif($calc_imc < 40){
    echo "Obesidade Classe II";
}elseif($calc_imc >= 40){
    echo "Obesidade Classe III";
}
?>
