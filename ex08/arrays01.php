<?php
// Arrays númericos >>> são númericos quando os indeices ou as chaves são inteiros.

echo "EXEMPLO 1 <br>";
echo "<br>";
$carros = array("BMW","Hilux","Mercedes");
print_r($carros); // para exibir um array nos temos uma função especifica que é: print_r();
echo "<br>".$carros[1];

echo "<hr>";

// por padrão o indice inicia do zero(0), mas também pode se modificar
echo "EXEMPLO 2 <br>";
echo "<br>";
$frutas = array(1=>"Banana",2=>"Laranja",3=>"Pera");
// para inserir um elemento no array
$frutas[] = "Ananaje";
// para inserir um elemento no array em um determinado indice
$frutas[6] = "Maracuja";
print_r($frutas);
echo "<br>".$frutas[1];

echo "<hr>";

echo "EXEMPLO 3 <br>";
echo "<br>";
// Array de uma outra froma
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);

echo "<hr>";

echo "EXEMPLO 4 <br>";
echo "<br>";
// Array de uma outra froma
$clientes = ["Rodrigo", "Felipe", "Ana","Bia"];
print_r($clientes);
echo "<hr>";

echo "EXEMPLO 5 <br>";
echo "<br>";
// Count >>> para exibir a quantidade de elementos de um array
echo count($carros);
echo "<br>";
$totalClientes = count($clientes);
echo $totalClientes;

echo "<hr>";

echo "EXEMPLO 6 <br>";
echo "<br>";
// Foreach >>> loop para percorrer arrays
foreach($carros as $valor) { // para cada elemento do array $carros vai ser atribuido a variavel $valor
    echo $valor."<br>";
}
echo "<br>";
foreach($motos as $valor) { // para cada elemento do array $motos vai ser atribuido a variavel $valor
    echo $valor."<br>";
}

echo "<hr>";
echo "<br>";

echo "EXEMPLO 7 <br>";
echo "<br>";
// Arrays associativos >>> são aqueles que quando os indices ou as chaves são strings
$pessoa = array("NOME" => " Jamisse", " IDADE" => 23," ALTURA " => 1.78);
$pessoa[" CIDADE "] = "Maputo";
foreach($pessoa as $indice => $valor) { // uma $pessoa que tem um $indice maior ou igual a $valor
    echo $indice.":".$valor."<br>";
}

echo "<hr>";
echo "<br>";

// Arrays multidimensionais >>> são aqueles que contém um ou mais arrays
echo "EXEMPLO 8 <br>";
echo "<br>";
$equipas = array(
    "Espanha" => array("CAMPEAO"=>"barcelona", "VICE"=>"real madrid", "TERCEIRO"=>"villa real"),
    "Inglaterra" => array("Man city", "Man united", "LiverPool")
);  
foreach($equipas["Espanha"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}

echo "<hr>";
echo "<br>";


// a variavel $nome irá receber o indice, nesse caso os nomes Glédse e Jamisse, a variavel $cod irá receber o conteudo nesse caso 68 e 48
echo "EXEMPLO 9 <br>";
echo "<br>";
$codigo = 48;
$senhas = array("Glédse"=> 68, "Jamisse" => 48);
foreach($senhas as $nome => $cod) {
    if ($codigo == $cod){
        echo $nome.":".$codigo."<br>";
    }   
}

echo "<hr>";
echo "<br>";


// php -S localhost:8000 >>> http://localhost:8000/ex08/arrays01.php
?>