<?php

$altura = 1.7;
$peso = 100;
$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "$imc = Abaixo do peso";
} else if ($imc >= 18.5 && $imc < 25) {
    echo "$imc = Peso normal";
} else if ($imc >= 25 && $imc < 30) {
    echo "$imc = Sobrepeso1";
} else if ($imc >= 30 && $imc < 35) {
    echo "$imc = Obesidade grau 1";
} else if ($imc >= 35 && $imc < 40) {
    echo "$imc = Obesidade grau 2";
} else {
    echo "$imc = Obesidade grau 3";
}