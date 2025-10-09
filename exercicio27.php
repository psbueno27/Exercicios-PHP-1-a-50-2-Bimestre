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
Descritivo: : Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.              
***************************/
$notas = [
    "Matemática" => 7.5,
    "Português" => 8.0,
    "História" => 6.5,
    "Biologia" => 9.0
];

$media = array_sum($notas) / count($notas);
echo "Média do aluno: $media";

?>
