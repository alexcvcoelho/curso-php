<?php
    //OPERADORES RELACIONAIS

var_dump(1 == 1); //op igual
var_dump(1 > 2); //op maior
var_dump(1 < 2); //op menor
var_dump(1 >= 1); // op maior igual
var_dump(2 <= 3); //op menor igual
var_dump(2 != 2); //op diferente <>
var_dump("2" === 2); // op identico

echo '<br><br><br>IF<br><br>';

if(1 != 1){
    echo "Bloco dentro do if";
}else if("a" === "a"){
    echo "Bloco dentro do else if";
}else{
    echo "Bloco dentro do else";
}

echo "<br><br>UNÁRIO (IF INLINE)<br><br>";

echo (1 == 1) ? "Bloco if" : "Bloco else";


echo "<br><br>SWITCH<br><br>";

$var = 90;
switch ($var) {
    case 10:
        echo "Case 1";
        break;
    case 20:
        echo "Case 2";
        break;
    case 90:
        echo "Case 3";
        break;
    default:
        echo "Bloco default";
        break;
}

echo "<br><br> CONDIÇÕES ANINHADAS<br><br>";

if(9 > 6 && 2 > 1){
    echo "9 é maior que 6 e 2 é maior que 1";
}
echo "<br>";
if(20 < 16 || 4 > 1){
    echo "20 é menor que 16 ou 4 é maior que 1";
}








?>
