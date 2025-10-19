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
Descritivo: .Função com Array: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.             
***************************/
function obterPrimeiroElemento($array) {
    if (count($array) > 0) {
      return $array[0];
    } else {
      return null;
    }
}

$valores = [19, 77, 30, 8];
echo obterPrimeiroElemento($valores)
?>
