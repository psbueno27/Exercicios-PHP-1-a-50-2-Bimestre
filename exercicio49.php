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
    
Data: 19 de outubro de 2025
Descritivo: Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.          
***************************/
function gerarArrayPares($n) {
    $pares = [];

    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
    }
    return $pares;
}
print_r(gerarArrayPares(50));  
?>
