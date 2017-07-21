<?php
    // ARRAYS

$a = array(1, 2, 3, 4, "string", true, 12.6, array("Outro array", false));

var_dump($a);

echo "<br><br><br>ARRAY COM CHAVE VALOR<br>";

$b = array(
    "chave1" => "valor1",
    "chave2" => "valor2",
    "chave3" => 3
);

echo $b['chave2'];

$b['chave4'] = "valor4";

echo "<br><br>VALOR ADICIONADO<br>";
var_dump($b);
echo "<br>";
$b[] = "valor5";
var_dump($b);
echo "<br>Quinto valor<br>";

echo $b[0];

echo "<br><br<br>Quantos elementos tem no array<br><br>";
echo "Tem " . count($b) . " elementos";
echo "<br><br><br>";
$c = array();

$a = array("banana", "maçã", "laranja");
$b = array("limão", "acerola");
$a[] = $b;

echo $a[3][0];



?>
