<?php

function extenso($n) {
    $r = "";
    switch ($n) {
        case 1:
            $r = "Um";
            break;
        case 2:
            $r = "Dois";
            break;
        case 3:
            $r = "Três";
            break;
        case 4:
            $r = "Quatro";
            break;
        case 5:
            $r = "Cinco";
            break;
        case 6:
            $r = "Seis";
            break;
        case 7:
            $r = "Sete";
            break;
        case 8:
            $r = "Oito";
            break;
        case 9:
            $r = "Nove";
            break;
        case 10:
            $r = "Dez";
            break;
        default:
            $r = "Nenhuma opção encontrada";
            break;
    }
    return $r;
}

for($i = 1; $i <= 12; $i++){
    echo extenso($i);
    echo '<br>';
}

?>
