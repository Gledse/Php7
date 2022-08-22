<?php
// funções para strings
echo "EXEMPLO 01 Funções para strings <br>";
$nome = "gledse jamisse";
$novoNome = strtoupper($nome);
echo $nome."-".$novoNome;
echo "<hr>";

echo "EXEMPLO 02 <br>";
$nome = "GLEDSE JAMISSE";
$novoNome = strtolower($nome);
echo $nome."-".$novoNome;
echo "<hr>";

echo "EXEMPLO 03 <br>";
$nome = "Olá mundo";
$novoNome = substr($nome, 4, 5); // o 4 é o caracter inicial, o 5 é o comprimento
// ou
$novoNome1 = substr($nome, 4);
echo $nome." - ".$novoNome." - ".$novoNome1;
echo "<hr>";

echo "EXEMPLO 04 <br>";
$nome = "mouse";
$novoNome = str_pad($nome, 7, "**"); // 7 comprimento
echo $novoNome."<br>";

// ou caso queira na esquerda
$novoNome1 = str_pad($nome, 7, "**", STR_PAD_LEFT);
echo $novoNome1."<br>";

// ou caso queira em ambos os lados
$novoNome2 = str_pad($nome, 7, "**", STR_PAD_BOTH);
echo $novoNome2."<br>";
echo "<hr>";

echo "EXEMPLO 05 <br>";
$nome = str_repeat("Sucesso!", 5); // vai repetir a palavra sucesso 5 vezes
$novoNome = strtoupper($nome);
echo $nome."<br>";
echo "<hr>";

echo "EXEMPLO 06 <br>";
$nome = "Olá mundo";
echo strlen($nome)."<br>"; // vai retornar o nr do comprimento do exto
echo "<hr>";

echo "EXEMPLO 07 <br>";
$texto = "A seleção argentina será a campeã da copa do mundo de 2022";
$novoTexto = str_replace("argentina", "Moçambique", $texto); // para corrigir uma palavra
echo $novoTexto;
echo "<hr>";

echo "EXEMPLO 08 <br>";
echo strpos($texto, "copa"); // para saber a posição de uma palavra
echo "<hr>";
echo "<hr>";

// FUNCOES PARA NUMEROS

echo "EXEMPLO 08 Funções para números <br>";
// para formatar um número
$db = 1234.56;
$preco = number_format($db, 2,",","."); // (variavel, casas decimais, "separador decimal", "separador de milhares")
echo "O valor do produto é $preco Mzn";
echo "<hr>";

echo "EXEMPLO 09 <br>";
echo round(3.55); // para arredondar números
echo "<hr>";

echo "EXEMPLO 10 <br>";
echo ceil(3.4); // essa função arredonda sempre pra cima
echo "<hr>";

echo "EXEMPLO 11 <br>";
echo floor(90.99); // arredonda sempre para baixo
echo "<hr>";




// php -S localhost:8000 >>> http://localhost:8000/ex12/funcoes01.php
?>