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
    if(isset($_POST['enviar-formulario'])){ // verificar se o usuario clicou no butão enviar-formulario
        $formatosPermitidos = array("PNG","JPEG","JPG","GIF");
        $quantidadeArquivos = count($_FILES['arquivo']['name']); // contagem de quantos arquivos tem na função files, usando a função count
        $contador = 0;

        while($contador < $quantidadeArquivos){ // Laço de repetição
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION); // função pathinfo (nome do arquivo[primeiro indice] [segundo indice], informação que nós queremos)
    
            if(in_array($extensao, $formatosPermitidos)){ // verificar se essa extensão é igual a formatos permitidos
                $pasta = "arquivos/"; // variavel que iremos gravar o arquivo
                $temporario = $_FILES['arquivo']['tmp_name'][$contador]; // iremos levar o caminho da variavel temporario
                $novoNome = uniqid().".$extensao"; // renomeando o arquivo, uniqid >>> id unico
    
                // função para fazer o Upload
                if(move_uploaded_file($temporario, $pasta.$novoNome)){ // (o arquivo temporario, o destino, a pasta. e novo nome do arquivo ou seja o novo caminho do arquivo)
                    echo "Upload feito com sucesso para $pasta$novoNome<br>";
                } else {
                    echo "Erro ao enviar o arquivo $temporario";
                }
            } else {
                echo "$extensao não é pemitida <br>";
            }
            $contador++;
        }
    }
    ?>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

    <input type="file" name="arquivo[]" multiple><br> <!-- name = a array arquivos, multiple >>> para poder selecionar multiplos arquivos para fazer upload-->
    <input type="submit" name="enviar-formulario">
</form>

    <!-- /// php -S localhost:8000 >>> http://localhost:8000/upload/index.php -->

</body>
</html>
