<?php
/* Sessões >>> serve para armazenar informações que poderam ser utilizadas em varias paginas, geralmente usamos sessoes para criar carrinho de compra, sistema de login */

session_start(); // para trabalhar com sessoes no inicio de todas as paginas é necessario iniciar sessões

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "BMW";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id()





?>
<!-- php -S localhost:8000 >>> http://localhost:8000/sessoes/index.php -->