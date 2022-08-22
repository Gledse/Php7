<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST['enviar-formulario'])){ // iiset... >>> se existe o indice enviar formulario na superglobal post

    //Array de erros
    $erros = array();

    // Sanitização >>> filtros de limpeza
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // filtrando o nome de caracteres especiais

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)){ // Se a idade não for um número inteiro, irá mostrar essa mensagem
        $erros[] = "A idade precisa ser um número inteiro";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // filtrando o email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "e-mail invalido!";
    }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL); // filtrando a url
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        $erros[] = "URL invalida";
    }

    // Exibindo Mensagens
    if(!empty($erros)){ // para verificar se a variavel não esta vasia, se não estiver vasia irá mostrar o erro
        foreach($erros as $erro){
            echo "<li> $erro </li>";
        }
    }
    else { // se estiver vasia irá mostrar essa mensagem
        echo "Parabéns, seus dados estão corretos";
    }
}
?>

<!--<form action="index.php" method="POST">-->
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
Nome: <input type="text" name="nome"><br>
Idade: <input type="text" name="idade"><br>
Email: <input type="text" name="email"><br>
<!--Peso: <input type="text" name="peso"><br>-->
IP: <input type="text" name="ip"><br>
URL: <input type="text" name="url"><br>
<button type="submit" name="enviar-formulario"> Enviar </button>
</form>

<a href ="dados.php?idade=25&sobrenome=Santos">Enviar dados</a>
</body>
</html>