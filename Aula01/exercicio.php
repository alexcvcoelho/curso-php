<?php
// RESOLUÇÃO EXERCICIO - DIGITAR 2 NUMEROS E A OPERAÇÃO A SER REALIZADA
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['op'];

/*VALORES ACEITADOS EM OP
 * s - soma
 * m - multiplicação
 * sub - subtração
 * d - divisão
 */
$resp = 0;

switch ($op) {
    case "s":
        $resp = $n1 + $n2;
        break;
    case "m":
        $resp = $n1 * $n2;
        break;
    case "sub":
        $resp = $n1 - $n2;
        break;
    case "d":
        $resp = $n1 / $n2;
        break;       

    default:
        echo "Nenhuma opção encontrada";
        break;
}
echo $resp;


?>
