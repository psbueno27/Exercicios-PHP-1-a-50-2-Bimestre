<?php
/******************************************************************************
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
Descritivo: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.    
*******************************************************************************/  

for ($i=1; $i <= 50; $i++) {
    if ($i > 1 && $i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0 || $i == 2 || $i == 3 || $i == 5) {
        echo "$i é primo\n";
    }
}
?>
