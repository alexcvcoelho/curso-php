<?php
echo "FOR <br> <br>";
for($i = 0; $i < 10; $i++){
    echo $i . "<br>";
}

echo "<br>WHILE<br><br>";
$bool = false;
$cont = 0;
while ($bool == false){
    if($cont == 4){
        $bool = true;
    }
    echo $cont . "<br>";
    $cont++;
}

echo "<br>DO WHILE<br><br>";
$cont = 0;
do{
    $cont++;
    echo $cont . "<br>";
}while ($cont < 4);

echo "<br>FOREACH<br><br>";
$array = array("banana", "maçã", "acerola");

foreach ($array as $fruta) {
    echo $fruta . "<br>";
}
?>

