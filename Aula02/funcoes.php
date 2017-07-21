<?php
echo "DECLARAR FUNÇÃO <br>";

function funcao(){
    echo "Função chamada";
}

function soma($n1, $n2){
    return $n1 + $n2;
}

echo "<br><br>CHAMAR FUNÇÃO<br><br>";

funcao();
echo soma(3, 5);

?>

