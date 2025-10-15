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
Descritivo: Procedimento: Crie um procedimento contagemRegressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.

***************************/

function contagemRegressiva($numero) {
    while ($numero >= 0) {
        echo $numero . "<br>";
        $numero--;
    }
}

contagemRegressiva(10);
?>
