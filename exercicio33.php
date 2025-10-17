<?php

function mostrarTabuada($numero) {
    echo "Tabuada do $numero:<br>";

    for($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

$valor = 7;
mostrarTabuada($valor);
?>