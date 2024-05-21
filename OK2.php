<?php

$n1 = 7;
$n3 = 6;
$n2 = 10;
$n4 = 4;

$soma = $n1 + $n2 + $n3 + $n4;
$media = $soma / 4; 

if (isset ($n1) AND isset ($n2) AND isset ($n3) AND isset ($n4)) {
    if ($n1 AND $n2 AND $n3 AND $n4 <= 10) {
        echo "valores aceitos <br>";
    }
    else {
        echo "erro com os valores <br>";
    }    
} else {
    echo "campos não preenchidos <br>";
}

if ($media >= 6) {
    echo "aprovado, média: $media";
}
else {
    echo "reprovado, média: $media";
}

