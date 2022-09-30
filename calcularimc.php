<?php
$altura = $_GET["Altura"];
$peso = $_GET["Peso"];
$operacao = $_GET["sexo"];
$imc = 0;
$imc = $peso / ($altura * $altura);
switch($operacao){
    case 1:
    if( $imc < 20){
        echo("Abaixo do normal");
    }else if($imc >= 20 && $imc <= 24.9){
       echo ("Normal");
    }else if($imc >= 25 && $imc <= 29.9){
    echo ("Obesidade Leve");
    }else if( $imc >= 30 && $imc <= 39.9){
        echo ("Obesidade Moderada");
    }else if($imc >= 40){
        echo ("Obesidade Mórbida");
    }else{
        echo ("Impossível calcular, por gentileza informar valores corretamente");
    }
        break;
    case 2:
        //$imc = $peso / ($altura * $altura);
    if( $imc < 19){
        echo ("Abaixo do normal");
    }else if($imc >= 19 && $imc <= 23.9){
       echo ("Normal");
    }else if($imc >= 24 && $imc <= 28.9){
    echo ("Obesidade Leve");
    }else if( $imc >= 29 && $imc <= 38.9){
        echo ("Obesidade Moderada");
    }else if($imc >= 39){
        echo ("Obesidade Mórbida");
    }else{
        echo ("Impossível calcular, por gentileza informar valores corretamente");
    }
        break;
}

echo("<br/>");
echo("O imc é:{$imc}");

?>