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
Descritivo: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.              
*******************************************************************************/
$numero=(int) readline("Digite um valor inteiro: ");
$contador=0;
if($numero<0){
    $numero=-$numero;
}
elseif($numero==0){
    $contador=1;
}
while ($numero>0){
$numero=intdiv($numero,10);
$contador++;
}
echo "O número tem $contador digítos.";
?>