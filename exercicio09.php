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
Descritivo: : Escreva um programa que leia números do usuário até que ele digite 0 e, no final, mostre a soma de todos os números digitados.          
*******************************************************************************/
$numero=1;
$contador=0;
$nums=[];
$soma=0;

while($numero != 0){ //Realiza o recebimento de números.
    $numero=(float)readline ("Digite a nota do aluno: ");
    if($numero == 0){
        break;
    }
    $nums[$contador]=$numero;
    $contador++;
}
if ($contador>0){ //Quando um desses números for negativo e o inicial não foi negativo, ele realiza a média.
    $soma= array_sum($nums);
    echo "A soma é $soma";
}
else{
    echo "A soma é zero";
}
?>
