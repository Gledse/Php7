<?php
/*

Fuções para arrays
Site da documentação do php: https://secure.php.net

//////////////////////////////////////////////////////////////

* is_array($array) >>> verificar se uma determinada variavel é um array
* in_array($valor, $array) >>> verifica se um determinado valor existe em alguma posição do array
* array_keys($array) >>> retorna um novo array com as chaves do array passado como parâmetro
* array_values($array) >>> retorna um novo array com os valores do array passado como parâmetro
* array_merge($array1, $array2) >>> agrega o conteudo dos dois arrays
* array_pop($array) >>> exclui a ultima posição do array
* array_shift($array) >>> exclui a primeira posição do array
* array_unshift($arr, $valor) >>> adiciona um ou mais elementos no inicio do array
* array_push($array, "valor", "valor") >>> Adiciona um ou mais elementos no final de um array
* array_combine($keys, $values) mescla os dois arrays passados
* array_sum() = calcula a soma dos elementos de um array
* explode("/", "20/01/2001") = transforma string em array
* implode("-", $arr) = transforma array em string
*/

echo "EXEMPLO 1 <br>";
echo "<br>";
$nomes = array("Rodrigo", "Felipe", "Maria", "José");


if(is_array($nomes)):
    echo "é um array";
else:
    echo "Não é um array";
endif;

echo "<br>";
echo "<hr>";

echo "EXEMPLO 2 <br>";
echo "<br>";
if(in_array("Felipe", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;

echo "<br>";
echo "<hr>";

echo "EXEMPLO 3 <br>";
echo "<br>";
$nom = array("Primo"=>"Paulo", "Mãe"=>"Ana", "Irmã"=>"Bia", "Vizinho"=>"Luis");

$keys = array_keys($nom); // esse array irá considerar os valores do array $nom como indices e os indices do array $nom irá considerar como valores
print_r($keys);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 4 <br>";
echo "<br>";
$values = array_values($nom); // levou apenas os valores do array $nom e criou um novo array com indices númericos
print_r($values);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 5 <br>";
echo "<br>";
$carros = array("Camaro", "Mercedes", "BMW");
$motos = array("50tinha", "50cc", "cb1000");
$veiculos = array_merge($carros, $motos); // irá juntar o conteúdo dos dois arrays
print_r($veiculos);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 6 <br>";
echo "<br>";
print_r($carros);
array_pop($carros); // irá excluir o ultimo elemento do array $carros
echo "<br>";
print_r($carros);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 7 <br>";
echo "<br>";
print_r($motos);
array_shift($motos); // irá excluir o primeiro elemento do array $motos
echo "<br>";
print_r($motos);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 8 <br>";
echo "<br>";
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Pera maçã", "Morango"); // irá adicionar os elementos no inicio do array
echo "<br>";
print_r($frutas);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 9 <br>";
echo "<br>";
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_push($frutas, "Manga", "Pera maçã", "Morango"); // irá adicionar os elementos no final do array
echo "<br>";
print_r($frutas);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 10 <br>";
echo "<br>";
$keys = array("Campeão", "Vice", "Terceiro"); // arrays para os indices
$values = array("Barcelona", "Real madrid", "LiverPool"); // array para os valores
$equipas = array_combine($keys, $values); // o primeiro array a ser escrito ficará como indice e o segundo como valor
print_r($equipas);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 11 <br>";
echo "<br>";
$soma = array(5,6,10,8.4);
echo array_sum($soma); // irá fazer a soma dos valores
// ou
echo "<br>";
$total = array_sum($soma);
echo $total;

echo "<br>";
echo "<hr>";

echo "EXEMPLO 12 <br>";
echo "<br>";
$data = "30/02/2022";
$novaData = explode('/', $data); // irá transformar a string em um array, uma vez que o que separa o dia do mês e do ano é a barra '/' então no primeiro parâmetro digitamos a barra, dps a variavel que contém a string
print_r($novaData);
// ou
echo "<br>";
$frase = "Meu nome é Glédse";
$novafrase = explode(' ', $frase);
print_r($novafrase);

echo "<br>";
echo "<hr>";

echo "EXEMPLO 13 <br>";
echo "<br>";
$nomes = array("Rodrigo","Felipe","Maria ","José");
$string = implode(",", $nomes); // irá transformar esse array em uma string
echo $string;


// php -S localhost:8000 >>> http://localhost:8000/ex08/arrays02.php
?>