<?php
// Operadores de comparação

echo "EXEMPLO 01 <br>";
if(10 == 10): // se 10 é igual a 10
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 02 <br>";
if(10 != 10): // se 10 é diferente de 10
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 03 <br>";
if(10 === 10): // se 10 é identico a 10, identico deve ter o mesmo valor e ser o mesmo tipo
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 04 <br>";
if(10 !== 11): // se 10 não é identico a 11
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 05 <br>";
if(10 <> 11): // se 10 é diferente de 11
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 06 <br>";
if(10 < 11): // se 10 é menor que 11
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";
echo "EXEMPLO 07 <br>";
if(10 > 11): // se 10 é maior que 11
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 08 <br>";
if(10 <= 11): // se 10 é menor ou igual a 11
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 09 <br>";
if(10 >= 11): // se 10 é maior ou igual a 11
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

echo "EXEMPLO 10 <br>";
var_dump(20 <=> 30); // se o lado esquerdo for menor irá retornar -1, se o lado direito for menor irá  retornar 1, se os dois lados forem iguais irá retornar 0


// php -S localhost:8000 >>> http://localhost:8000/ex10/operadores02.php
?>