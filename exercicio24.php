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
    Descritivo: Usando o array de produtos do exercício 23, imprima o nome e o preço 
    de cada produto com foreach aninhado.
**************************/

$produtos = [
    ["nome" => "Mouse", "preco" => 59.90],
    ["nome" => "Teclado", "preco" => 129.90],
    ["nome" => "Monitor", "preco" => 899.00],
    ["nome" => "Headset", "preco" => 199.50]
];

$fimLinha = (php_sapi_name() === "cli") ? PHP_EOL : "<br>";
$separador = (php_sapi_name() === "cli") ? str_repeat("-", 30) . PHP_EOL : "<hr>";
$tituloInicio = (php_sapi_name() === "cli") ? "=== " : "<h3>";
$tituloFim = (php_sapi_name() === "cli") ? " ===" . PHP_EOL : "</h3>";

echo $tituloInicio . "Produtos e Preços" . $tituloFim;

foreach ($produtos as $produto) {
    foreach ($produto as $chave => $valor) {
        if ($chave === "preco") {
            $valor = "R$ " . number_format($valor, 2, ',', '.');
        }
        echo ucfirst($chave) . ": " . $valor . $fimLinha;
    }
    echo $separador;
}
?>
