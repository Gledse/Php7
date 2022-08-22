<?php
// Criar funções
echo "EXEMPLO 01 <br>";
function exibirNome() { // criei a função
    echo "Meu nome é Glédse";
}
exibirNome(); // chamei a função
echo "<hr>";

echo "EXEMPLO 02 <br>";
function exibirNome1($nome) { // criei a função
    echo "Meu nome é $nome";
}
exibirNome1("Jamisse"); // chamei a função
echo "<hr>";

echo "EXEMPLO 03 <br>";
function calcularMedia($nome, $n1, $n2){
    $media = ($n1 + $n2) / 2;
    if ($media >= 7){
        echo "$nome Aprovado com a media $media.";
        echo "<br>";
    } else {
        echo "$nome Reprovado com a media $media.";
        echo "<br>";
    }
}
calcularMedia("Bob", 8, 7);
calcularMedia("João", 4, 5);
echo "<hr>";

// php -S localhost:8000 >>> http://localhost:8000/ex12/funcoes02.php
?>