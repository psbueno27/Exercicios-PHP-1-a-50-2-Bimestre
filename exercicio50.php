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
    
Data: 15 de outubro de 2025
Descritivo: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().            
*******************************************************************************/
$texto= (string) readline("Digite o texto que você quer inverter: ");
function inverterString($string) {
    $invertida = '';
    $tamanho = mb_strlen($string);
    
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= mb_substr($string, $i, 1);
    }
    
    return $invertida;
}
$textoInvertido = inverterString($texto);
echo $textoInvertido;
?>