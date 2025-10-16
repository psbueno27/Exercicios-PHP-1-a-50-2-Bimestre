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
Descritivo:  Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".            
*******************************************************************************/
$opção=(int) readline("Digite 1 para iniciar a operação, 2 para parar e 3 para sair: ");
do{
    if($opção!=1 && $opção!=2 && $opção!=3){
        echo "Opção inválida.";
        break;
    }
    if($opção==1){
        echo "Você escolheu a opção 1, abrindo menu..."."\n";
        break;
    }
    if($opção==2){
        echo "Você escolheu a opção 2, parando..."."\n";
        break;
    }
}while($opção!=3);

if($opção==3){
    echo "você escolheu a opção 3, menu fechando..."."\n";
    echo "Menu encerrado.";
}
?>