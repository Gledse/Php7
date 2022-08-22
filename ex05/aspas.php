<?php
// ASPAS E CONCATENACAO
// aspas simples precisam de concatenação
$nome = 'Glédse Jamisse';
echo 'Meu nome é '.$nome.' e minnha idade é \'23\'<br>';
echo '<hr>';

// aspas duplas são interpretativas
$nome = "Glédse Jamisse";
$idade = 21;
echo "Meu nome é $nome e minnha idade é \"$idade\"<br>";

//php -S localhost:8000 >>> http://localhost:8000/ex05/aspas.php
?>