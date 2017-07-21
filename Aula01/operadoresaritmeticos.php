<?php
//OPERADORES ARITMÉTICOS
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

echo "<br>SOMA<br>";

echo $n1 + $n2;

echo "<br>MULTIPLICAÇÃO<br>";

echo $n2 * $n1;

echo "<br>SUBTRAÇÃO<br>";

echo $n2 - $n1;

echo "<br>DIVISÃO<br>";

echo $n1 / $n2;

echo "<br> MÓDULO <br>";

echo $n1 % $n2;

//OUTRAS FORMAS DE USAR OS OPERADORES
echo "<br><br>";

$valor = 10;

$valor++;
$valor = $valor + 1;
$valor += 3;
echo $valor;

echo "<br>";
$string = "Ola";
$string .= "Mundo!!!";
echo $string;








?>

