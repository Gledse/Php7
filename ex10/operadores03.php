<?php
// Operadores lógicos

$idade = 21;
$nome = "Jamisse";

echo "EXEMPLO 01 <br>";
if(($idade == 25) and ($nome == "Jamisse")): // and >>> e
    echo "é verdadeiro <br>";
else:
    echo "é falso <br>";
endif;
echo "<hr>";

echo "EXEMPLO 02 <br>";
if(($idade == 25) || ($nome == "Jamisse")): // || >>> ou
    echo "é verdadeiro <br>";
else:
    echo "é falso <br>";
endif;
echo "<hr>";

echo "EXEMPLO 03 <br>";
if(($idade == 25) or ($nome == "Jamisse")): // or >>> ou
    echo "é verdadeiro <br>";
else:
    echo "é falso <br>";
endif;
echo "<hr>";

echo "EXEMPLO 04 <br>";
if(($idade == 25) xor ($nome == "Jamisse")): // xor >>> ou exclusivo >>> só vai retornar verdadeira se pelo menos uma for falsa, se as duas forem verdadeiras irá retornar falso e se as duas forem falsas irá retornar falso
    echo "é verdadeiro <br>";
else:
    echo "é falso <br>";
endif;
echo "<hr>";

echo "EXEMPLO 05 <br>";
if( ! ($idade == 25) and ! ($nome == "Jamisser")): //  ! ($idade == 25)>>> idade não é igual a 21 certo e nome não é igual a jamisse certo, irá retornar verdadeiro
    echo "é verdadeiro <br>";
else:
    echo "é falso <br>";
endif;
echo "<hr>";

// php -S localhost:8000 >>> http://localhost:8000/ex10/operadores03.php
?>