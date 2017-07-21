<?php
//COMANDOS PARA IMPRIMIR NA TELA
echo 'echo Hello World!!!<br>';
print('print Hello World!!!<br>');
//die("Parou");
print_r('print_r Hello World!!!<br>');
var_dump('var_dump Hello World!!!');
echo '<br>';

//DECLARAÇÃO DE VARIÁVEIS
$a = 22.35;
var_dump($a);
$a = true;
var_dump($a);
echo "<br><br>";

//CONCATENÇÃO
$nome = 'Alex';
$idade = '22';

echo $nome . ' tem ' . $idade . ' anos ';
echo '<br><br>';

echo "$nome tem $idade anos";

echo '<br><br>';
//SUPERGLOBAIS GET
echo "{$_GET['nome']} tem {$_GET['idade']} anos";

echo "<br><br>";

echo "<pre>";
var_dump($_SERVER);
echo "</pre>"






?>