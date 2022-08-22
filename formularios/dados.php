<?php
/*
$nome = $_GET['nome'];
$email = $_GET['email'];

//echo "Seu nome é $nome e o seu email é $email";
var_dump($_GET);


//echo $_GET['idade']."<br>".$_GET['sobrenome'];
*/
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome e o seu email é $email";
var_dump($_POST);

/// php -S localhost:8000 >>> http://localhost:8000/formularios/index.php