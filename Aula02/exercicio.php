<?php

echo "NUMEROS PARES <br><br>";

for($i = 0; $i < 100; $i++){
    echo ($i % 2) == 0 ? $i : "";
//    if($i % 2 == 0){
//        echo $i;
//    }
    echo "<br>";
}
