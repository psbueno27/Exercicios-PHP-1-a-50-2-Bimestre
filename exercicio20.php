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
    Descritivo: Crie um array com os 7 dias da semana e imprima-os usando um laço for.
**************************/

$diasSemana = [
    "Domingo",
    "Segunda-feira",
    "Terça-feira",
    "Quarta-feira",
    "Quinta-feira",
    "Sexta-feira",
    "Sábado"
];

// Verifica se o código está rodando no navegador ou no terminal
$fimLinha = (php_sapi_name() === "cli") ? PHP_EOL : "<br>";

for ($i = 0; $i < count($diasSemana); $i++) {
    echo $diasSemana[$i] . $fimLinha;
}
?>
