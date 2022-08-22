<?php
// Constantes >>> é um identificador para um valor unico, uma vez definida a constante, não se pode alterar o valor da constante, o identificador é sempre escrita com as letras maiusculas

// As constantes são globais, podem ser usadas em todo script
define("NOME", "Jamisse");
define("IDADE", 21);
define("ALTURA", 1.78);
define("SOLTEIRO", true);

// constante do tipo array
define("EQUIPAS", ["barcelona","real madrid", "atletico de madrid"]);

echo "Meu nome é ".NOME.", a minha idade é ".IDADE.", a minha altura é ".ALTURA.", sou Solteiro ".SOLTEIRO;

echo "<hr>";
echo EQUIPAS[0];

var_dump (EQUIPAS);

function exibeNome(){
    echo "<br>".NOME;
}
exibeNome(); // chamando a função


//php -S localhost:8000 >>> http://localhost:8000/ex07/constantes.php
?>