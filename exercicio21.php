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
    Descritivo: Crie um array associativo para armazenar os dados de um aluno 
    (nome, idade, curso).
**************************/

$aluno = [
    "nome" => "Guilherme Costa Ferreira",
    "idade" => 21,
    "curso" => "Engenharia de Software"
];

$fimLinha = (php_sapi_name() === "cli") ? PHP_EOL : "<br>";
$tituloInicio = (php_sapi_name() === "cli") ? "=== " : "<h3>";
$tituloFim = (php_sapi_name() === "cli") ? " ===" . PHP_EOL : "</h3>";

echo $tituloInicio . "Dados do Aluno" . $tituloFim;
echo "Nome: {$aluno['nome']}" . $fimLinha;
echo "Idade: {$aluno['idade']}" . $fimLinha;
echo "Curso: {$aluno['curso']}" . $fimLinha;
?>
