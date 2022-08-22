<?php
// superGlobais

echo "EXEMPLO 01 <br>";
$x = 10;
$y = 15;

function soma() {
   echo $GLOBALS['x'] + $GLOBALS['y']; // essa variavel permite chamar e usar qualquer variavel do script php, não importa em que arquivo esteja
}
soma();
echo "<hr>";

echo "EXEMPLO 02 <br>";
echo $_SERVER['PHP_SELF']."<br>"; // vai retornar o nome desse arquivo que escrevi o script php [escrever a informação que vc quer]
echo "<hr>";

echo "EXEMPLO 03 <br>";
echo $_SERVER['SERVER_NAME']."<br>"; // vai retornar o nome do host do servidor desse script php
echo "<hr>";

echo "EXEMPLO 04 <br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>"; // vai retornar o caminho do script
echo "<hr>";

echo "EXEMPLO 05 <br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>"; // vai retornar a pasta raiz do script
echo "<hr>";

echo "EXEMPLO 06 <br>";
echo $_SERVER['SERVER_PORT']."<br>"; // vai retornar a porta do servidor web
echo "<hr>";

echo "EXEMPLO 07 <br>";
echo $_SERVER['REMOTE_ADDR']."<br>"; // vai retornar o endereço IP de onde o utilizador está navegando
echo "<hr>";


/*
echo "EXEMPLO 05 <br>";
echo "<hr>";
*/











// php -S localhost:8000 >>> http://localhost:8000/ex12/superglobais01.php
?>