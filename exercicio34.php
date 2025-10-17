<?php

function verificarParImpar($numero) {
    if($numero % 2 == 0) {
        echo "O número $numero é Par.<br>";
    } else {
        echo "O número $numero é Ímpar.<br>";
    }
}

$valor = 8;
verificarParImpar($valor);
?>