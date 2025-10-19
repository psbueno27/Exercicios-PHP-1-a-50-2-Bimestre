<?php
/**************************
    Curso: Engenharia de Software
    Disciplina: Linguagem e Técnicas de Programacão
    Professor: Flores
    Turma: ESOFT-2A
    Componentes:
                Alef Luciano (RA: 25004652-2)
                Daniel de Souza (RA: 25143755-2)
                Guilherme Costa Ferreira (RA: 25068539-2)
                João Pedro (RA: 25168486-2)
                Juan Pablo (RA: 25181903-2)
                Lucas Teixeira da Silva (RA: 25356144-2)
                Pedro Bueno (RA: 25181992-2)
                Sadrak Araújo (RA: 25356591-2)      
    
Data: 8 de outubro de 2025
Descritivo: .Função: Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.             
***************************/
function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

// Exemplo de uso:
$numero = 4;

if (ehPrimo($numero)) {
    echo "$numero é primo";
} else {
    echo "$numero não é primo";
}
?>
