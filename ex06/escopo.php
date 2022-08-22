<?php
// Escopo de variaveis
// escopo global
$nome = "Glédse Jamisse";
/*
function exibeNome() {
    // escopo local
    echo $nome;
}
exibeNome();
*/
function exibeNome() {
    // escopo global
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";

function exibeCidade() {
    global $cidade;
    $cidade = "Cidade de Maputo";

}
exibeCidade();
echo $cidade;
echo "<hr>";

// escopo global
$a = 1;
$b = 3;
$c = 7;

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();
echo "<hr>";

//php -S localhost:8000 >>> http://localhost:8000/ex06/escopo.php
?>
