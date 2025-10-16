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
    
Data: 15 de outubro de 2025
Descritivo: Procedimento: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média
>= 7) ou "Reprovado".

***************************/

function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média: " . number_format($media, 2, ',', '.') . "<br>";

    if ($media >= 7) {
        echo "Situação: Aprovado";
    } else {
        echo "Situação: Reprovado";
    }
}

calcularMediaAluno(5.5, 6.0);
?> 
