<?php

function imprimirArray($lista) {
    echo "Elementos do array:<br>";
    
    for($i = 0; $i < count($lista); $i++) {
        echo "Posição $i: " . $lista[$i] . "<br>";
    }
}

$meuArray = array(10, 20, 30, 40, 50);
imprimirArray($meuArray);
?>