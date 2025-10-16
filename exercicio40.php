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
Descritivo: Procedimento: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
***************************/

// Procedimento para exibir os dados de um carro
function exibirCarro($carro) {
    echo "=== Dados do Carro ===<br>";
    echo "Marca: " . $carro["marca"] . "<br>";
    echo "Modelo: " . $carro["modelo"] . "<br>";
    echo "Ano: " . $carro["ano"] . "<br>";
}

// Exemplo de uso
$carro1 = array(
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2022
);

exibirCarro($carro1);
?>
