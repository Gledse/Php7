<?php
/*
* Condicionais
* if
* else
* else if
*/

$numero = 4;

if ($numero == 10):
    echo "é igual a 10";
elseif($numero <= 9):
    echo "é menor ou igual a 9";
endif;

echo "<br> <hr>";

$media = 3;
echo($media >= 7) ? "Aprovado!" : "Reprovado";

echo "<br> <hr>";

/*
* Condicionais
* switch
* case
*/

$cor = "azul";

switch ($cor):
    case "vermelho":
        echo "Sua cor favorita é vermelho";
        break;

        case "verde":
        echo "Sua cor favorita é verde";
        break;

        case "azul":
        echo "Sua cor favorita é azul";
        break;

        default:
        echo "Sua cor favorita não é vermelho, verde ou azul";
endswitch;


// php -S localhost:8000 >>> http://localhost:8000/ex09/condições01.php
?>