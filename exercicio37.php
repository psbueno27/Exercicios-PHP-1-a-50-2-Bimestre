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
Descritivo: Procedimento com Múltiplos Parâmetros: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada
***************************/

function mostrardados($nome, $idade, $cidade) {
    echo "Seu Nome é: " . $nome . "<br>";
    echo "Sua Idade é: " . $idade . "<br>";
    echo "Sua Cidade é: " . $cidade . "<br>";
}

mostrardados("SADRAK", 25, "CURITIBA-PR");

?>


